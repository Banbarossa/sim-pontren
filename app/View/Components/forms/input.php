<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $label;
    public $id;
    public $type;
    public $name;
    public $value;
    public $isRequired;
    public $hintText;
    public $model;
    public $placeholder;
    public $step;


    public function __construct(
        $label = "",
        $id = "",
        $type = "text",
        $name = "",
        $value = "",
        $isRequired = false,
        $hintText = null,
        $model = "",
        $placeholder = "",
        $step = "",
    ) {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->isRequired = $isRequired;
        $this->hintText = $hintText;
        $this->model = $model;
        $this->placeholder = $placeholder;
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.input');
    }
}
