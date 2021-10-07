<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $news = News::all();
       return view('pages.news',['news'=>$news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

         if( $request->user()->name == 'admin')
         {
            return view('pages.panel-news-editor',['usr'=> $request->user()->name]);
         }
         else
         {
            return redirect()->route('login');
         }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
       $validated =  $request->validate($request->rules());

        // $parameters = $request->only('title','body','img_path');
        // News::create([
        //     'title' => $parameters['title'],
        //     'body' =>  $parameters['body'],
        //     'img_path' =>  $parameters['img_path'],

        // ])->save();
        News::create( $request->only('title','body','img_path'))->save();
        return redirect()->intended(route('news.create'))->withErrors(['sucess'=>'News create.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
