<?php

namespace App\Core;

use InvalidArgumentException;

/**
 * Abstraction for the current Hyde project installation.
 */
class HydeProject
{
    protected string $path;

    public function __construct(string $path)
    {
        if (! $this->isValidPath($path)) {
            throw new InvalidArgumentException('The supplied path does not seem to belong to a Hyde project.');
        }

        $this->path = $path;
    }

    protected function isValidPath(string $path): bool
    {
        $path = realpath($path);

        return is_dir($path)
            && is_file($path . '/hyde')
            && is_file($path . '/config/hyde.php');
    }
}
