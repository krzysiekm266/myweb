<?php

namespace App\Http\Requests;

use App\Models\Image;
use App\Rules\ForUpdate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
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
        return ($this->update ?? false)
        ? [
            'title' => ['required', 'string','max:100','min:5', new ForUpdate($this->input('news_id')) ],
            'body' => ['required', 'string','max:600'],
            'img_path' => ['required' ,'string','max:100'],
            'user_id'=>['required'],
        ]
        : [
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
        //do poprawy
        $img = Image::where('path',$this->input('img_path'))->first()
                    ?? Image::create(['path'=>$this->input('img_path'),'counter'=>1, ])->save();

                    //Image::contains(Image::where('path',$this->input('img_path'))->first());
        if( !is_bool($img) )
        {
            $img->counter++ ;
            $img->save() ;
        }

    }
}
