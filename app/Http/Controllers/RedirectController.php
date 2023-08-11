<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek() {
        if (auth()->user()->role === 'guru') {
            return redirect('/guru');
        } elseif (auth()->user()->role === 'siswa') {
            return redirect('/siswa');
        } else {
            return redirect('/login');
        }
    }
}