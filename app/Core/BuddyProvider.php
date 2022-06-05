<?php

namespace App\Core;

use App\Core\Concerns\IsIdentifiable;
use App\Core\Contracts\Buddy;
use Hyde\Framework\Hyde;

/**
 * Primary interface implementation for interacting with the Hyde Buddy.
 */
class BuddyProvider implements Buddy
{
    use IsIdentifiable;

    protected BuddyConfiguration $configurationManager;

    protected HydeProject $project;
    protected ArtisanProxy $artisan;

	public function __construct()
	{
        $this->identify();

        $this->configurationManager = new BuddyConfiguration();

        if ($this->configurationManager->hasActiveProject() ) {
            $this->project = new HydeProject($this->configurationManager->getActiveProjectConfiguration()->path);
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
}
