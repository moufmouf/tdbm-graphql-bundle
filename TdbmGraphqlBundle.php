<?php


namespace TheCodingMachine\Tdbm\Graphql\Bundle;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use TheCodingMachine\Tdbm\Graphql\Bundle\DependencyInjection\TdbmGraphqlCompilerPass;

class TdbmGraphqlBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TdbmGraphqlCompilerPass(), PassConfig::TYPE_BEFORE_OPTIMIZATION, 1);
    }
}
