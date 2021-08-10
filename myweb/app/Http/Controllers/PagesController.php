<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     *
     */
    public function index()
    {
       return view('layouts.home');
    }

    /**
     *
     */
    public function products()
    {
        $prdata = [
            'telefon'=>'iPhone',
            'tv'=>'LCD Samsung',
            'agd'=>'Pralka'
        ];

        return view('layouts.products')->with('prdata',$prdata);

    }

    /**
     *
     */
    public function about()
    {
     return view('layouts.about');
    }
    /**
     *
     */
    public function login()
    {
        return view('layouts.login');
    }
}
