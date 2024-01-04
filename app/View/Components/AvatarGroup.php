<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AvatarGroup extends Component
{
    /**
     * Create a new component instance.
     */
    public $member;

    public function __construct($member)
    {
        $this->member = $member;
    }

    public function render()
    {
        return view('components.avatar-group');
    }
}
