<?php

namespace DeployTracker\Importer;

use DeployTracker\Entity\Application;

interface RevisionLogImporterInterface
{
    /**
     * @param string $filename
     * @param Application $application
     * @param string $stage
     * @return void
     */
    public function import(string $filename, Application $application, string $stage);
}