<?php

namespace App\View\Components\Forms;

use App\Models\produits;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class liste_product extends Component
{
    /**
     * Create a new component instance.
     */
    public $products;
    public function __construct()
    {
        //
        $this->products = produits::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {  
        return view('components.forms.liste_product');
    }
}
