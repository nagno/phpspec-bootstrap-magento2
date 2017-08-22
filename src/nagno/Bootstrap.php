<?php

namespace Nagno\Phpspec\BootstrapMagento2;

use PhpSpec\Extension;
use PhpSpec\ServiceContainer;

class Bootstrap implements Extension
{
    public function load(ServiceContainer $container, array $params)
    {
        $container->define('runner.maintainers.initialise_magento_object_factory', function () {
            return new Runner\Maintainer\BootstrapMaintainer();
        }, ['runner.maintainers']);
    }
}
