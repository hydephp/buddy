<?php

namespace App\Core;

/**
 * Contains information about the current Hyde project installation.
 */
class Hyde
{
    protected string $path;

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function hasPath(): bool
    {
        return ! empty($this->path);
    }
}
