<?php

namespace App\Core\Concerns;

trait InteractsWithProject
{
    /**
     * Run a command in the project's HydeCLI and return the output.
     */
    public function artisan(string $command): string
    {
        return shell_exec('cd '.$this->getPath().' && php hyde ' . $command);
    }
}
