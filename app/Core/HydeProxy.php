<?php

namespace App\Core;

class HydeProxy extends \Hyde\Framework\Hyde
{
    protected string $path;

    public function __construct(string $path)
    {
        $this->path = $path;

    }
}
