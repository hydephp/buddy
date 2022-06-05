<?php

namespace App\Core;

/**
 * Interacts with the global configuration file.
 */
class BuddyConfiguration
{
    protected string $configurationPath;
    protected object $config;

    public function __construct()
    {
        // Buddy currently only supports Windows.
        $directory = getenv('HOMEDRIVE') . getenv('HOMEPATH').'\.hyde-buddy';

        if (! is_dir($directory)) {
            mkdir($directory, recursive: true);
        }

        $this->configurationPath = $directory.'/config.json';

        if (! file_exists($this->configurationPath)) {
            $this->config = new \stdClass();
            $this->config->buddy_version = 'canary';
            $this->config->config_created_at = date('Y-m-d H:i:s');
            $this->config->projects = [];
            $this->save();
        }

        $this->load();
    }

    public function load(): self
    {
        $this->config = json_decode(file_get_contents($this->configurationPath));

        return $this;
    }

    public function save(): self
    {
        file_put_contents($this->configurationPath, json_encode($this->config, JSON_PRETTY_PRINT), LOCK_EX);

        return $this;
    }

    public function getConfiguration(): object
    {
        return $this->config;
    }

    public function hasActiveProject(): bool
    {
        return isset($this->config->active_project);
    }

    public function getActiveProjectConfiguration(): ?object
    {
        if (! $this->hasActiveProject()) {
            return null;
        }

        return $this->config->active_project;
    }

    public function setActiveProject(HydeProject $project): self
    {
        $this->config->active_project = $project;
        $this->save();

        return $this;
    }
}
