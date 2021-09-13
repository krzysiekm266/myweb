<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

class PagesController extends Controller
{
    /**
     *Welcome/index page
     */
    public function index()
    {
       return view('index');
    }

    /**
    *Admin panel page
    */
    public function panel()
    {
        return view('panel');
    }

    /**
     *News page
     */
    public function news()
    {

        return view('news');

    }




}
