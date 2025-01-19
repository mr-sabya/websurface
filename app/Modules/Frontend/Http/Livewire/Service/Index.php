<?php

namespace App\Modules\Frontend\Http\Livewire\Service;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Use the kebab-cased component name for the view path
        return view('Frontend::livewire.' . implode('.', $namespaceParts) . ".index");
    }
}