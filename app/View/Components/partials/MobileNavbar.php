<?php

namespace App\View\Components\partials;

use App\Models\Menu;
use Illuminate\View\Component;

class MobileNavbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menus;
    public function __construct()
    {
        $this->menus = Menu::orderBy('position')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.mobile-navbar');
    }
}
