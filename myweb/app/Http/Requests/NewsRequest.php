<?php

namespace App\Http\Requests;

use App\Models\Image;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string','max:100','min:5','unique:news' ],
            'body' => ['required', 'string','max:600'],
            'img_path' => ['required' ,'string','max:100'],
            'user_id'=>['required'],

        ];
    }

     /**
     * Regiser image path when creating news.
     * If path exist in table increse counter otherwise add image model to table
     */
    public function registerImage()
    {
        $img = Image::where('path',$this->input('img_path'))->first() ?? Image::create([
                                                                                'path'=>$this->input('img_path'),
                                                                                'counter'=>1,
                                                                            ])->save();

        if( !is_bool($img) )
        {
            $img->counter++ ;
            $img->save() ;
        }

    }
}
