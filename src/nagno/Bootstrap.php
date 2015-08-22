<?php

namespace Nagno\Phpspec\BootstrapMagento2;

use PhpSpec\Extension\ExtensionInterface;
use PhpSpec\ServiceContainer;

class Bootstrap implements ExtensionInterface
{
    public function load(ServiceContainer $container)
    {
        $container->set('runner.maintainers.initialise_magento_object_factory', function ($c) {
            return new Runner\Maintainer\BootstrapMaintainer();
        });
    }
}
