<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

// This controller is responsible for main/panel navigation.
//Authentication has its own controllers( Auth folder - breeze)
class PagesController extends Controller
{
    /**
     *Welcome/index page
     */
    public function index()
    {
       return view('pages.index');
    }

    /**
    *Admin panel page
    */
    public function panel()
    {
        return view('pages.panel');
    }

    /**
     *News page
     */
    public function news()
    {

        // return view('pages.news');
        return redirect(route('news.all'));

    }
    /**
     *About page
     */
    public function about()
    {

        return view('pages.about');

    }


}
