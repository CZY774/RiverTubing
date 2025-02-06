<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function ceksaran()
    {
        return view('tentangkami');
    }

    public function simpan(Request $request)
    {
        $saran = new Saran;
        $saran->title = $request->title;
        $saran->description = $request->description;
        $saran->save();

        return redirect('home')->with('status', 'Form Data Has Been inserted');
    }


    public function lihatsaran()
    {
        $sarans = Saran::all();
        return view('ShowSaran',compact('sarans'));
    }
}
