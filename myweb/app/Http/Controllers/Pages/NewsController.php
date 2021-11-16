<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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

        return view('pages.panel-news',
            [

                'images'=>Storage::files('images'),
                'img_path'=>$request->img_path,
                'temp_body'=>session()->get('s_body'),


            ]
        );

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

        $request->registerImage();

        return redirect()->route('news.create')->withErrors(['sucess'=>'News '.$request->input('title').' create.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $this->authorize('update',$news);
        return view('pages.panel-news-edit',[

            'news'=>$news,
            'images'=>Storage::files('images'),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $this->authorize('update',$news);

        return  $news->update($request->validated())
            ? redirect()->route('news.create')->withErrors(['sucess'=>'News '.$news->title.' update.'])
            : redirect()->route('news.create')->withErrors(['update_error'=>'News '.$news->title.' update error!.']);

        // return redirect()->route('news.create')->withErrors(['sucess'=>'News '.$news->title.' update.']);
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

        $newsAuthor= $news->user->name;
        $newsTitle = $news->title;

        $img = Image::where('path',$news->img_path)->first() ?? null;
        if($img?->counter == 1)
        {
            $img->delete();
        }
        elseif($img != null)
        {
            $img->counter--;
            $img->save();
        }
        else
        {
            return back()->withErrors(['error_img_not_register'=>'I cant delete this news. Image path is not registered']);
        }

        $news->delete();

        return back()->withErrors(['sucess'=>'News: '.$newsTitle.' author: '.$newsAuthor.' deleted.']);
    }
}
