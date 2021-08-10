<?php

namespace App\View\Components\Products;

use Illuminate\View\Component;

class ProductsList extends Component
{
    public $prdata;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $prdata)
    {
        //
        $this->prdata = $prdata;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products.products-list');
    }
}
