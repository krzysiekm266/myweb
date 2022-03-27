<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public static $img_preview_new;

    public static function select($img)
    {
        $img_preview_new = $img;
        return $img_preview_new;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
