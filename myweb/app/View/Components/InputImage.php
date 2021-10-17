<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InputImage extends Component
{
    public string $imagePath;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $imagePath)
    {
         $this->imagePath = $imagePath ;
    }

    /**
     * Get image path
     */
    public function getImagePath():string
    {
        return $this->imagePath;
    }

    /**
     * Set image path
     */
    public function setImagePath(string $path)
    {
        $this->imagePath = $path;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-image');
    }
}
