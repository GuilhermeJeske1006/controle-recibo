<?php

namespace App\Livewire\Components\Dashboard;

use Livewire\Component;

class Filter extends Component
{
    public $search;

    public function filter()
    {

    }

    public function render()
    {
        return view('livewire.components.dashboard.filter');
    }
}
