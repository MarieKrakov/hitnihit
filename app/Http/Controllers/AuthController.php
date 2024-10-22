<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

//pro autentizaci uživatelů, včetně přihlášení, odhlášení a registrace
class AuthController extends Controller
{
    public function show() //Zobrazuje přihlašovací formulář
    {
        return view('pages.login');
    }

    public function login(Request $request) //autentizace uživatele, který zadá email a heslo
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]); //vstupní data odpovídají pravidlům

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { //se pokusí přihlásit uživatele s jeho údaji
            $request->session()->regenerate(); //Pokud je přihlášení úspěšné, metoda regeneruje session ID
            return redirect()->intended('/foods');
        }

        return back()->withErrors([ //vrátí uživatele zpět na přihlašovací stránku s chybovou zprávou
            'email' => 'Přihlašovací údaje nejsou správné. Zkontrolujte svůj email nebo heslo.',
        ])->withInput();
    }
//registrace
    public function register()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        //validace údajů - minimálně 8 znaků hesla
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('status', 'Registrace proběhla úspěšně. Nyní se můžete přihlásit.');
    }
//odhlášení
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Odhlášeno. Díky, že používáš HitniHIT.');
    }
}