<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.clear_query_region_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/Proxy/DelegateCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Command/Proxy/QueryRegionCacheDoctrineCommand.php';

$this->privates['doctrine.clear_query_region_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();

$instance->setName('doctrine:cache:clear-query-region');

return $instance;
