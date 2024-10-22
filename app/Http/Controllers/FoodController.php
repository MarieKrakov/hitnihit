<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Food;
use Illuminate\Support\Facades\Auth;

//umožňuje spravovat potraviny, které jsou buď default dostupné, nebo přidané uživatelem
class FoodController extends Controller
{
    public function foods()
    {
        // Získání potravin, které jsou buď předdefinované (user_id musí být null) nebo vytvořené přihlášeným uživatelem
        $foods = Food::whereNull('user_id')->orWhere('user_id', Auth::id())->get();
        return view('pages.foods', ['foods' => $foods]);
    }
//Validace a ukládání dat pomocí Eloquentu a ukládá novou potravinu do DB
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'histamine_level' => 'required|integer|min:1|max:3',
            'category' => 'required|string|max:255',
        ]);

        //ytváří nový záznam v databázi, který obsahuje informace o potravině a user_id přihlášeného uživatele
        Food::create([
            'name' => $request->name,
            'histamine_level' => $request->histamine_level,
            'category' => $request->category,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('foods')->with('status', 'Potravina byla úspěšně přidána.');
    }
//Odstraňuje potravinu z databáze + validace přístupu a odstranění záznamu. 
    public function destroy($id)
    {
        //tohle zajišťuje, že potravinu může smazat jen uživatel, který ji přidal.
        $food = Food::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $food->delete(); //Pokud potravina existuje a patří přihlášenému uživateli, metoda ji odstraní

        return redirect()->route('foods')->with('status', 'Potravina byla odstraněna.'); //zpět na seznam potravin s potvrzovací zprávou
    }
}