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

        return view('pages.news');

    }
    /**
     *News page
     */
    public function about()
    {

        return view('pages.about');

    }
    /************************************************************
     *News edit  page
     */
    public function editNews()
    {

        return view('pages.panel-news-editor');

    }


}
