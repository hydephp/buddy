<?php

namespace App\View\Components;

use App\Core\Contracts\Buddy;
use Illuminate\View\Component;

class HydeInstallationDetails extends Component
{
    public array $details = [];

    public function __construct(Buddy $buddy)
    {
        $this->addDetail('Project Directory', $buddy->hyde()->getPath());
        $this->parseDebugScreen($buddy->hyde()->artisan('debug --no-ansi'));
        $this->addDetail('PHP Version', PHP_VERSION);
    }

    protected function parseDebugScreen(string $screen): void
    {
        $lines = explode("\n", $screen);

        foreach ($lines as $line) {
            if (str_starts_with($line, 'Hyde Version')) {
                $this->details['Hyde Version'] = $this->getValue($line);
            }
            if (str_starts_with($line, 'Framework Version')) {
                $this->details['Framework Version'] = $this->getValue($line);
            }
        }
    }

    protected function getValue(string $line): string
    {
        return substr($line, strpos($line, ':') + 1);
    }

    protected function addDetail(string $key, string $value): void
    {
        $this->details[$key] = $value;
    }

    public function render()
    {
        return view('components.hyde-installation-details');
    }
}
