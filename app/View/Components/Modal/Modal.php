<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class Modal extends Component
{
    public $title;

    public $id;

    public $btnName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = null, $id = null, $btnName = 'new')
    {
        $this->title = $title;

        $this->id = $id;

        $this->btnName = $btnName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.modal');
    }
}
