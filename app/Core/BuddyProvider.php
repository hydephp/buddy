<?php

namespace App\Core;

use App\Core\Concerns\IsIdentifiable;
use App\Core\Contracts\Buddy;

/**
 * Primary interface implementation for interacting with the Hyde Buddy.
 */
class BuddyProvider implements Buddy
{
    use IsIdentifiable;

    protected bool $initialized = false;
    protected Hyde $hyde;

	public function __construct()
	{
        $this->identify();
        $this->initialize();
	}

    // Assertion methods

    public function isInitialized(): bool
    {
        return $this->initialized;
    }

    public function hasHydeInstance(): bool
    {
        return isset($this->hyde);
    }

    // Initialization methods

    public function initialize(): void
    {
        $this->initialized = true;
    }

    public function constructHydeInstance(): void
    {
        $this->hyde = new Hyde();
    }

    // Accessor methods

    public function getInstance(): Buddy
    {
        return $this;
    }

    public function getHydeInstance(): Hyde
    {
        if (!$this->hasHydeInstance()) {
            $this->constructHydeInstance();
        }

        return $this->hyde;
    }

    public function hyde(): Hyde
    {
        return $this->getHydeInstance();
    }
}
