<?php

namespace MateCommerce\Component\Customer;

use MateCommerce\Component\Base\AbstractCommerceComponent;
use MateCommerce\Component\Customer\DependencyInjection\Compiler\CustomerLoaderPass;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class MateCustomerComponent extends AbstractCommerceComponent
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container
            ->addCompilerPass(new CustomerLoaderPass());
    }
}