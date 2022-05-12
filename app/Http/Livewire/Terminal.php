<?php

namespace App\Http\Livewire;

use App\Core\Concerns\InteractsWithProject;
use Livewire\Component;

class Terminal extends Component
{
    use InteractsWithProject;

    public array $lines = [];
    public string $command = '';

    public function mount()
    {
        $this->lineOut('Booting the HydeCLI console...');
    }

    public function bootConsole()
    {
        $this->lineOut($this->artisan('list --no-ansi'));
    }

    public function sendCommand()
    {
        // Call command

        // Clear input
        $this->command = '';

        // Update lines
    }

    public function lineOut(string $line = '')
    {
        $this->lines[] = $line;
    }

    public function render()
    {
        return view('livewire.terminal');
    }
}
