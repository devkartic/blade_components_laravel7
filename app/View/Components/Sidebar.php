<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{
    public $title;
    public $info;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }

    public function lists($string){
        return ['Item 4 from class Component', 'Item 5 from class Component', 'Item 6 from class Component', $string];
    }
}
