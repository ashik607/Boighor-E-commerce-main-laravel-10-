<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;

class FooterComponent extends Component
{
    public function render()
    {
        // Retrieve the first or default setting
        $setting = Setting::first();

        return view('livewire.footer-component', [
            'setting' => $setting
        ]);
    }
}

