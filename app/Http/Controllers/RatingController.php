<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...
        // return $request->all();
        // check if user id logged in
        if (Auth::check()) {
            # code...
            $user = Auth::user();
            $user_id = $user->id;
            $comment = $request->comment;
            $rating = $request->rating;
            $product_id = $request->product_id;

            $product = Product::find($product_id);
            $product->rate($rating, $comment);
            return 'success';
        } else {
            # code...
            return 'not logged in';
        }
    }

    public function showRating($productId)
    {
        // return $productId;
        $comments = Product::with('ratings.user')->findOrFail($productId);
        // return $store->ratings;
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
    }
}
