<?php

namespace App\Modules\Frontend\Http\Livewire\Theme;

use Livewire\Component;

class Logo extends Component
{
    public $isFooter;

    public function mount($isFooter = false)
    {
        $this->isFooter = $isFooter;
    }
    
    public function render()
    {
        // Use the kebab-cased component name for the view path
        return view('Frontend::livewire.theme.logo');
    }
}