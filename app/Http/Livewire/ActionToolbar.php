<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ActionToolbar extends Component
{
    public bool $serverActive = false;

    protected $listeners = ['serverStatus'];

    public function render()
    {
        return view('livewire.action-toolbar');
    }

    public function ping()
    {
        $this->serverActive = false;
        try {
            $response = Http::timeout(3)->get('http://localhost:8080/');
        } catch (\Illuminate\Http\Client\ConnectionException $exception) {
            return;
        }
        
        if ($response->status() === 200) {
            $this->serverActive = true;
        }
    }

    public function serverStatus($status)
    {
        $this->serverActive = $status === 200;
    }

    public function stopServer()
    {
        // See if the server is active && managed by Buddy else fail

        // Stop the server

        // Verify that the server is stopped

        $this->serverActive = false;
        $this->emit('serverStatus', 0);
    }

    public function startServer()
    {   
        // Verify no processes are running on the 8080 port

        // Start the server through Buddy which saves the PID

        // Verify that the server is running

        $this->serverActive = true;
        $this->emit('serverStatus', 200);
    }
}
