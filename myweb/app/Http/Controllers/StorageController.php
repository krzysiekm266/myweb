<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorageRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StorageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('store_image');
        // $images = Storage::files('images');
        return view('pages.panel-storage',['images'=>Storage::files('images')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorageRequest $request)
    {


         $this->authorize('store_image');

        $filename = $request->input('img_filename');

        if(Storage::exists('images/'.$filename))
        {
            return redirect()->route('storage.create')
                             ->withErrors(['file_error'=>' Image '.$filename.' already exist.']);
        }

        Storage::putFileAs('images',$request->file('img_input'),$filename);

        return redirect()->route('storage.create')
                        ->withErrors(['sucess'=>' Image '.$filename.' is saved.']);

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
    public function destroy(Request $request)
    {
        $this->authorize('delete_image');
        $path = $request->img_path;
        // do przetestowania
        if(Storage::exists($path))
        {
            $imgCount = News::where('img_path',$path)->count();
            if($imgCount==0)
            {
                Storage::delete([$path]);

                return redirect()->route('storage.create')->withErrors(['sucess'=>' Image '.$path.' deleted.']);
            }
            else
            {
                return redirect()->route('storage.create')->withErrors(['img_used'=>' Image '.$path.' is used by .'.$imgCount.' News!']);
            }


        }
        else
        {
            return redirect()->route('storage.create')->withErrors(['file_error'=>' Image '.$path.' doesnt  exist.']);
        }
    }
}
