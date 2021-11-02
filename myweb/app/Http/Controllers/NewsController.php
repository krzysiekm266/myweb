<?php

namespace App\Http\Controllers;

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

        return view('pages.panel-news-editor',
            [
                'images'=>Storage::files('images'),
                'img_path'=>$request->img_path,

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

        $newsAuthor= $news->user->name;
        $newsTitle = $news->title;//poprawic
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

        return back()->withErrors(['sucess'=>'News: '.$newsTitle.'author: '.$newsAuthor.' deleted.']);
    }
}
