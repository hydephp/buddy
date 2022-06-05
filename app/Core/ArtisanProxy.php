<?php

namespace App\Core;

class ArtisanProxy
{
    protected string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    /**
     * Run a command in the project's HydeCLI and return the output.
     */
    public function artisan(string $command): string
    {
        return shell_exec('cd '.$this->path.' && php hyde ' . $command);
    }

    /**
     * Run a command in the project's HydeCLI and stream the output.
     */
    public function passthru(string $command): void
    {
        passthru('cd '.$this->path.' && php hyde ' . $command);
    }
}
