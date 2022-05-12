<?php

namespace App\Core\Contracts;

use App\Core\Hyde;

interface Buddy
{
    // Assertion methods
    public function isInitialized(): bool;
    public function hasHydeInstance(): bool;

    // Initialization methods
    public function initialize(): void;
    public function constructHydeInstance(): void;

    // Accessor methods
    public function getInstance(): Buddy;
    public function getHydeInstance(): Hyde;
    public function hyde(): Hyde;
}
