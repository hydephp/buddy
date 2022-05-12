<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class HydeServerStatus extends Component
{
    public bool $loaded = false;

    public int $status = 0;

    public function ping()
    {
        try {
            $response = Http::timeout(3)->get('http://localhost:8080/');
        } catch (\Illuminate\Http\Client\ConnectionException $exception) {
            $this->loaded = true;
            return;
        }
        $this->status = $response->status();
        $this->loaded = true;
    }

    public function render()
    {
        return view('livewire.hyde-server-status');
    }
}
