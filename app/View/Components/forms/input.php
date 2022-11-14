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

    public $label, $id, $type, $model, $class, $name, $placeholder, $message;
    public function __construct(
        $label = "",
        $id = "",
        $type = "",
        $model = "",
        $class = "",
        // $customClass = "",
        $name = "",
        $placeholder = "",
        $message = "",
    ) {
        $this->label = $label;
        $this->id = $id;
        $this->type = $type;
        $this->model = $model;
        $this->class = $class;
        // $this->customClass = $customClass;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->message = $message;
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
