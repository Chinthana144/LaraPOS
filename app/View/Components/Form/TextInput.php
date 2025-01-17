<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $label;
    public $name;
    public $placeholder;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $placeholder, $type)
    {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.text-input');
    }
}
