<?php

namespace App\Http\Middleware;

use App\Models\Image;
use Closure;
use Illuminate\Http\Request;

class IsImageRegistered
{
    /**
     * Handle an incoming request.
     * If image path exist in database return error massage
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,$varName)
    {
       $img = Image::where('path',$request->{$varName})->first() ?? false;
       if(is_bool($img) && !$img)
       {
            return $next($request);
       }
       else
       {
          return back()->withErrors(['img_exist_error'=>'Image: '.$img->path.' is used by: '.$img->counter.' news.']);

       }


    }
}
