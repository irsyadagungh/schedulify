<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListDetailTask extends Component
{
    /**
     * Create a new component instance.
     */

     public $list;
     public $detail;

    public function __construct($list,$detail)
    {
        //
        $this->list=$list;
        $this->detail=$detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.list-task-link');
    }
}
