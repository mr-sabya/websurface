<?php

namespace App\Modules\Frontend\Http\Livewire\Theme;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        // Use the kebab-cased component name for the view path
        return view('Frontend::livewire.theme.footer');	
    }
}