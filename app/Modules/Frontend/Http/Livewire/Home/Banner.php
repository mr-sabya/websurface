<?php

namespace App\Modules\Frontend\Http\Livewire\Home;

use Livewire\Component;

class Banner extends Component
{
    public function render()
    {
        // Use the kebab-cased component name for the view path
        return view('Frontend::livewire.' . implode('.', $namespaceParts) . ".banner");
    }
}