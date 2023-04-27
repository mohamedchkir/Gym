<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    //
    public function store(Request $request)
    {
        //check if user has permission 'create comment'
            // if(auth()->user()->hasPermissionTo('create comments')){

        // check if user id logged in
        if (Auth::check()) {
            $user = Auth::user();
            $user_id = $user->id;
            $comment = $request->comment;
            $rating = $request->rating;
            $product_id = $request->product_id;

            $product = Product::find($product_id);
            $product->rate($rating, $comment);
            return 'success';
        } else {
            return 'not logged in';
        }
    // }
    // else{
    //     abort(403, 'Unauthorized action.');
    // }
}

    public function showRating($productId)
    {
        // check if user has permission 'view comment'
        // if (auth()->user()->hasPermissionTo('view Comments')) {

        $comments = Product::with('ratings.user')->findOrFail($productId);
        $averageRating = $comments->averageRating;

        $latestComments = $comments->ratings()->with('user')->orderByDesc('created_at')->take(3)->get();
        $latestCommentsData = [];

        foreach ($latestComments as $comment) {
            $latestCommentsData[] = [
                'comment' => $comment->comment,
                'created_at' => $comment->created_at->diffForHumans(),
                'user_name' => $comment->user->name,
                'user_image' => $comment->user->image,
            ];
        }
        // $averageRating without the decimal point
        $averageRating = (int) $averageRating;
        return response()->json([
            'average_rating' => $averageRating,
            'latest_comments' => $latestCommentsData,
        ]);
    // }
}

    public function adminComments(){

        // // check if user has permission 'view comment'
        // if (auth()->user()->hasPermissionTo('view comments')) {

        // get all comments with user and store
        $comments = Product::with('ratings.user')->get();
        // dd($comments);

        $commentsData = [];
        foreach ($comments as $comment) {
            foreach ($comment->ratings as $rating) {
                $commentsData[] = [
                    'id' => $rating->id,
                    'rating' => $rating->rating,
                    'comment' => $rating->comment,
                    'created_at' => $rating->created_at->diffForHumans(),
                    'user_name' => $rating->user->name,
                    'user_email'=> $rating->user->email,
                    'user_phone'=> $rating->user->phone,
                    'image' => $rating->user->image,
                ];
            }
        }
        // dd($commentsData);
        return view('comments.comment', ['commentsData' => $commentsData]);

    // }
    // else{
    //     abort(403, 'Unauthorized action.');
    // }
}

    public function deleteComment($id)
    {
        // dd(auth()->user()->getAllPermissions());
        // check if user has permission 'delete comment'
        if (auth()->user()->hasPermissionTo('delete Comments')) {

        $rating = Rating::find($id);

        if (!$rating) {
            return back()->with('error', 'Comment not found!');
        }

        $rating->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
    else{
        abort(403, 'Unauthorized action.');
    }
}





}
