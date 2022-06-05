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

    protected BuddyConfiguration $configurationManager;

    protected HydeProject $project;
    protected ArtisanProxy $artisan;
    protected HydeProxy $hyde;

	public function __construct()
	{
        $this->identify();

        $this->configurationManager = new BuddyConfiguration();

        if ($this->configurationManager->hasActiveProject() ) {
            $this->project = new HydeProject($this->configurationManager->getActiveProjectConfiguration()->path);

            $this->hyde = new HydeProxy($this->project->path);
            $this->artisan = new ArtisanProxy($this->project->path);

        }
	}

    public function configManager(): BuddyConfiguration
    {
        return $this->configurationManager;
    }

    public function config(): object
    {
        return $this->configurationManager->getConfiguration();
    }

    public function project(): HydeProject|false
    {
        return $this->project ?? false;
    }

    public function hyde(): HydeProxy
    {
        return $this->hyde;
    }

    public function artisan(): ArtisanProxy
    {
        return $this->artisan;
    }
}
