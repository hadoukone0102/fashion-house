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
    public $type;
    public $prod;

    public function __construct($type)
    {
        //
        $this->type = $type;
        $this->prod = produits::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {  

        return view('components.forms.liste_product',[
            
        ]);
        
    }

    public function getProduct() 
    {
        return [
            'message' => 'je fais un test',
        ];
    }
}
