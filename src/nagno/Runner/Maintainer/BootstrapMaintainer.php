<?php

namespace Nagno\Phpspec\BootstrapMagento2\Runner\Maintainer;

use PhpSpec\Runner\Maintainer\MaintainerInterface;
use PhpSpec\Loader\Node\ExampleNode;
use PhpSpec\SpecificationInterface;
use PhpSpec\Runner\MatcherManager;
use PhpSpec\Runner\CollaboratorManager;
use Magento\Framework\App\Bootstrap;

class BootstrapMaintainer implements MaintainerInterface
{
    /**
     * @var Bootstrap
     */
    private $bootstrap = null;

    /**
     * {@inheritdoc}
     */
    public function supports(ExampleNode $example)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(
        ExampleNode $example,
        SpecificationInterface $context,
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
        SpecificationInterface $context,
        MatcherManager $matchers,
        CollaboratorManager $collaborators
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return 500;
    }

    /**
     * Bootstraps Magento2
     */
    public function bootstrapMage2()
    {
        if (is_null($this->bootstrap)) {
            Bootstrap::create(BP, $_SERVER);
            $this->bootstrap = true;
        }
    }
}
