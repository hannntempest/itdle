<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Stat;
use App\Models\Word;

class MainController extends Controller
{
    public function randomWord()
    {
        return Word::inRandomOrder()->first();
    }

    public function index()
    {
        $row = DB::table('stats')->orderBy('id', 'desc')->first();
        $currentGuesses = $row->attempt;
        if ($currentGuesses == 0) {            
            $secret = $this->randomWord();
            session(['word'=>$secret->word,  'h1'=>$secret->hint1, 'h2'=>$secret->hint2, 'h3'=>$secret->hint3 ]);
        }
        return view('main_page');
    }

    public function checkWord($word)
    {
        return $word == session('word');
    }

    public function incrementGuesses()
    {
        $row = DB::table('stats')->orderBy('id', 'desc')->first();

        if ($row) {
            $currentGuesses = $row->attempt;
            $gameID = $row->id;

            $newGuesses = $currentGuesses + 1;

            DB::table('stats')->where('id', $gameID)->update(['attempt' => $newGuesses]);

            return $newGuesses;
        } else {
            return false;
        }
    }

    public function checkGuess(Request $request)
    {
        if ($request->isMethod('post')) {
            $wordToCheck = $request->input('guess');

            $numGuesses = $this->incrementGuesses();

            if ($this->checkWord($wordToCheck)) {
                session(['message' => "Congratulations! You guessed it. It took you $numGuesses guesses."]);

                DB::table('stats')->insert(['attempt' => 0, 'username'=>Auth::user()->username]);

                return redirect('/main_page');
            } else {
                if ($numGuesses < 7) {
                    session(['message' => "Sorry, try again. You've made $numGuesses guesses."]);
                } else {
                    session(['message' => "Sorry, you've reached the maximum number of guesses. The correct word was $wordToCheck."]);

                    DB::table('stats')->insert(['attempt' => 0, 'username'=>Auth::user()->username]);
                }

                return redirect('/main_page');
            }
        }
    }

    public function indexTeam()
    {
        return view('team_profile');
    }

    public function indexCreds()
    {
        return view('credits');
    }

    public function indexLogin()
    {
        return view('login_user');
    }

    public function indexRegist()
    {
        return view('regist_user');
    }

    public function loginAdmin()
    {
        return view('login_admin');
    }

    public function authUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/main_page');
        }

        return back()->with('fail', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login_user');
    }

    public function logoutAdmin()
    {
        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login_admin');
    }

    public function authAdmin(Request $request)
    {
        if($request->email == "hanan@gmail.com" && $request->password == "HanTra8370"){
            return redirect('/admin_page');
        }
    }
}
