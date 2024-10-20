<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function foods()
{
    $foods = Food::whereNull('user_id')
                ->orWhere('user_id', Auth::id())
                ->get();

    return view('pages.foods', compact('foods'));
}
}