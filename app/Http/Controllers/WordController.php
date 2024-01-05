<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class WordController extends Controller
{
    public function index()
    {
        $kata = Word::all();
        $randomWord = Word::inRandomOrder()->first();

        return view('admin_page', ['katas' => $kata, 'randomWord' => $randomWord]);
    }

    public function tambahKata()
    {
        return view('add_word');
    }

    public function prosesTambahKata(Request $request)
    {
        $kata = new Word;
        $kata->word = $request->word;
        $kata->hint1 = $request->hint1;
        $kata->hint2 = $request->hint2;
        $kata->hint3 = $request->hint3;
        $kata->save();

        return Redirect::to('/admin_page');
    }
    public function hapusKata($id)
    {
    $pegawai = Word::findOrFail($id);
    $pegawai->delete();

    return redirect('/admin_page');
    }

    public function editKata($id)
    {
        $kata = Word::findOrFail($id);
        return view('update_word', compact('kata'));
    }

    public function updateKata(Request $request, $id)
    {
        $kata = Word::findOrFail($id);
        $kata->word = $request->word;
        $kata->hint1 = $request->hint1;
        $kata->hint2 = $request->hint2;
        $kata->hint3 = $request->hint3;
        $kata->save();

        return redirect('/admin_page');
    }
}
