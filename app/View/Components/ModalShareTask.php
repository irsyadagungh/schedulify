<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalShareTask extends Component
{
    /**
     * Create a new component instance.
     */
    public $code;

    public function __construct($code)
    {
        $this->code = $code;
    }

    public function render()
    {
        return view('components.modal-share-task');
    }
}
