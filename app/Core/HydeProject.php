<?php

namespace App\Core;

use InvalidArgumentException;

/**
 * Abstraction for the current Hyde project installation.
 */
class HydeProject
{
    public string $path;

    public function __construct(string $path)
    {
        if (! static::validatePath($path)) {
            throw new InvalidArgumentException('The supplied path does not seem to belong to a Hyde project.');
        }

        $this->path = $path;
    }

    public function setActive()
    {
        BuddyFacade::configManager()->setActiveProject($this);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public static function validatePath(string $path): bool
    {
        $path = realpath($path);

        return is_dir($path)
            && is_file($path . '/hyde')
            && is_file($path . '/config/hyde.php');
    }
}
