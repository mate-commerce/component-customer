<?php

namespace MateCommerce\Component\Customer\DependencyInjection\Compiler;

use Doctrine\Bundle\DoctrineBundle\DoctrineBundle;
use Doctrine\ORM\EntityManagerInterface;
use MateCommerce\Component\Customer\Loader\CustomerDoctrineOrmLoader;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class CustomerLoaderPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {

    }

    /**
     * we offers doctrine loaders and persisters as default loader, but when the doctrinebundle is not present, we remove these default
     * loaders / persisters
     */
    private function processDoctrineLoaders(ContainerBuilder $container): void
    {
        if (!class_exists(DoctrineBundle::class)) {
            $container->removeDefinition(CustomerDoctrineOrmLoader::class);
        }
    }
}