<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalAddTask extends Component
{
    /**
     * Create a new component instance.
     */
    public $assign;
    public $project;

    public function __construct($assign,$project)
    {
        $this->assign = $assign;
        $this->project = $project;
    }

    public function render()
    {
        return view('components.modal-add-task-project');
    }
}
