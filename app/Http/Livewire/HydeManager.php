<?php

namespace App\Http\Livewire;

use App\Core\Hyde;
use Livewire\Component;

class HydeManager extends Component
{
    public int $formProgress = 1;
    
    public string $path = '';

    public function findHydeProject()
    {
        $this->validate([
            'path' => 'required|string']
        );

        if (! Hyde::isThisAValidHydeProjectPath($this->path)) {
            $this->addError('path', 'Could not find a Hyde project here.');
            return;
        }
    }

    public function render()
    {
        return view('livewire.hyde-manager');
    }
}
