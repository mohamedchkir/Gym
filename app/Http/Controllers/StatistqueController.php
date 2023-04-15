<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Programme;
use App\Models\Comment;
use App\Models\Product;


use Illuminate\Http\Request;

class StatistqueController extends Controller
{
    public function index()
    {
        $products = Product::all();

        // get the sum of the quantity of all products
        $totalQuantity = Product::sum('quantity');

        // get the sum of the price of all products
        $totalProductPrice = Product::sum('price');

        // get the number of products
        $totalProducts = Product::count();

        // get the min price of all products
        $minProductPrice = Product::min('price');

        // get the max price of all products
        $maxProductPrice = Product::max('price');



        // Get the total number of comments
        $comments = Comment::all();
        $comments_count = $comments->count();


        // Get the total number of users
        $usersCount = User::count();

        // Get the total number of users with admin role
        $adminCount = User::role('admin')->count();

        // Get the total number of users with user role
        $userCount = User::role('user')->count();

        // Get the total number of users with coach role
        $coachCount = User::role('coach')->count();

        // Return view
        return view('maindash', compact('usersCount', 'adminCount', 'userCount', 'coachCount','comments_count','totalQuantity', 'totalProductPrice', 'totalProducts', 'minProductPrice', 'maxProductPrice'));

    }
}
