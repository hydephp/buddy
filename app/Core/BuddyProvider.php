<?php

namespace App\Core;

/**
 * Primary interface implementation for interacting with the Hyde Buddy.
 */
class BuddyProvider implements Buddy
{
    protected bool $initialized = false;
    protected Hyde $hyde;


	public function __construct()
	{
        if (! $this->isInitialized())
        {
            $this->initialize();
        }
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

    public function hyde(): Hyde
    {
        return $this->getHydeInstance();
    }

    public function getHydeInstance(): Hyde
    {
        if (!$this->hasHydeInstance()) {
            $this->constructHydeInstance();
        }

        return $this->hyde;
    }
}
