<?php

namespace Nagno\Phpspec\BootstrapMagento2\Runner\Maintainer;

use PhpSpec\Runner\Maintainer\Maintainer;
use PhpSpec\Loader\Node\ExampleNode;
use PhpSpec\Specification;
use PhpSpec\Runner\MatcherManager;
use PhpSpec\Runner\CollaboratorManager;
use Magento\Framework\App\Bootstrap;

class BootstrapMaintainer implements Maintainer
{
    /**
     * @var Bootstrap
     */
    private $bootstrap = null;

    /**
     * {@inheritdoc}
     */
    public function supports(ExampleNode $example): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(
        ExampleNode $example,
        Specification $context,
        MatcherManager $matchers,
        CollaboratorManager $collaborators
    ) {
        $this->bootstrapMage2();
    }

    /**
     * {@inheritdoc}
     */
    public function teardown(
        ExampleNode $example,
        Specification $context,
        MatcherManager $matchers,
        CollaboratorManager $collaborators
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority(): int
    {
        return 500;
    }

    /**
     * Bootstraps Magento2
     */
    public function bootstrapMage2()
    {
        if (is_null($this->bootstrap)) {
            $bootstrap = Bootstrap::create(BP, $_SERVER);
            $bootstrap->getObjectManager();
            $this->bootstrap = true;
        }
    }
}
