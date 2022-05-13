<?php

namespace App\Http\Livewire;

use App\Core\Navigation\NavigationItem;
use Illuminate\Support\Collection;
use Livewire\Component;

class Sidebar extends Component
{
    public Collection $items;

    public function mount()
    {
        $this->items = new Collection();

        $this->items->push(new NavigationItem(
            'Dashboard',
            'dashboard',
        ));

        $this->items->push(new NavigationItem(
            'Terminal',
            'dashboard.terminal',
        ));
    }

    public function render()
    {
        return view('livewire.sidebar', [
            'active' => request()->route()->getName(),
            'items' => $this->items,
        ]);
    }
}
