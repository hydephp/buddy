<?php

namespace App\Http\Livewire;

use App\Core\Hyde;
use Livewire\Component;

class HydeManager extends Component
{
    // State
    public int $formProgress = 1;
    
    // Input
    public string $path = '';
    public bool $terms = false;

    // Data
    public string $hydePath;

    public function findHydeProject()
    {
        $this->validate([
            'path' => 'required|string'
        ]);

        if (! Hyde::isThisAValidHydeProjectPath($this->path)) {
            $this->addError('path', 'Could not find a Hyde project here.');
            return;
        }

        $this->hydePath = realpath($this->path);
        $this->formProgress = 2;
    }

    public function setup()
    {
        $this->formProgress = 3;

    }

    public function render()
    {
        return view('livewire.hyde-manager');
    }
}
