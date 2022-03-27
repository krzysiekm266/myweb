<?php

namespace App\Rules;

use App\Models\News;
use Illuminate\Contracts\Validation\Rule;


class ForUpdate implements Rule
{

    private $id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $this->id = $id;

    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $news = News::where('id','!=',$this->id)->where($attribute,$value)->first();

        $item = ($news ?: false );

        return !$item;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This news title already exist!.';
    }
}
