<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function foods()
    {
        // Získání potravin, které jsou buď předdefinované (user_id null) nebo vytvořené přihlášeným uživatelem
        $foods = Food::whereNull('user_id')->orWhere('user_id', Auth::id())->get();
        return view('pages.foods', ['foods' => $foods]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'histamine_level' => 'required|integer|min:1|max:3',
            'category' => 'required|string|max:255',
        ]);

        Food::create([
            'name' => $request->name,
            'histamine_level' => $request->histamine_level,
            'category' => $request->category,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('foods')->with('status', 'Potravina byla úspěšně přidána.');
    }

    public function destroy($id)
    {
        $food = Food::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $food->delete();

        return redirect()->route('foods')->with('status', 'Potravina byla odstraněna.');
    }
}