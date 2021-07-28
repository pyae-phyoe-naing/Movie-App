<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name,$type,$value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$type,$value='')
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
