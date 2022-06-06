<?php

namespace App\Core;

/**
 * Deprecated as I don't think it adds any value
 * (The normal Hyde facade can be used directly as we bind the path in the buddy service provider)
 */
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
