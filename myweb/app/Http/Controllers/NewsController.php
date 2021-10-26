<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       return view('pages.news',['allNews' => News::orderBy('created_at','DESC')->get()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create',News::class);
        //do poprawy
         if( Auth::check() && Auth::user()->name == 'administrator')
         {
            return view('pages.panel-news-editor',
                [
                    'images'=>Storage::files('images'),
                    'img_path'=>$request->img_path,
                ]
                );
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
       $this->authorize('create',News::class);

        News::create( $request->validated())->save();

        return back()->withErrors(['sucess'=>'News create.']);
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
    public function destroy(News $news)
    {

        $this->authorize('delete',$news);

        $newsAuthor=' temp';

        $newsId = $news->id;
        $news->delete();

        return back()->withErrors(['sucess'=>'News  id: '.$newsId.'author: '.$newsAuthor.' deleted.']);
    }
}
