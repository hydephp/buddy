<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        return view('livewire.sidebar', [
            'active' => route(request()->route()->getName()),
            'items' => [
                'Dashboard' => route('dashboard'),
                'Terminal' => route('dashboard.terminal'),
            ]
        ]);
    }
}
