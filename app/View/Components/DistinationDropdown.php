<?php

namespace App\View\Components;

use App\Models\Distination;
use Illuminate\View\Component;

class DistinationDropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
        return view('components.distination-dropdown',[
            'distinations'=>Distination::all(),
            'currentDistination'=>Distination::firstWhere('slug',request('distination'))
        ]);
    }
}
