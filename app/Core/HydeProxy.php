<?php

namespace App\Core;

class HydeProxy extends \Hyde\Framework\Hyde
{
    protected string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }
    
    /**
     * @deprecated avaliable for compat, use project instead
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @deprecated avaliable for compat, use project instead
     */
    public function artisan(string $command): string
    {
        return BuddyFacade::artisan()->artisan($command);
    }
}
