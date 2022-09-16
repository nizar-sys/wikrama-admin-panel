<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $type;
    public $classicon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($classicon, $type)
    {
        //

        $this->classicon = $classicon;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.icon');
    }
}
