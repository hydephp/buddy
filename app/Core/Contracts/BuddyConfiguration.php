<?php

namespace App\Core\Contracts;

interface BuddyConfiguration
{
    public function load(): self;
    public function save(): self;
}
