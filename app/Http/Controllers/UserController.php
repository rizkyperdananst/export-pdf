<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use PDF;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();

        return view('data-user', compact('users'));
    }

    public function printPDF()
    {
        $users = User::all();
        
        $pdf = PDF::loadView('cetak-data-user', compact('users'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}
