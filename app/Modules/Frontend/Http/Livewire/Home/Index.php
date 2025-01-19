<?php

namespace App\Modules\Frontend\Http\Livewire;

use Livewire\Component;

class Home//Index extends Component
{
    public function render()
    {
        return view('Frontend::livewire." . Str::kebab(Home//Index) . "');
    }
}