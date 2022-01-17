<?php

namespace MateCommerce\Component\Customer\Loader;

use MateCommerce\Component\Customer\Storage\Customer\CustomerInterface;
use MateCommerce\Component\Customer\Exception\CustomerNotFoundException;

class CustomerChainLoader implements CustomerLoaderInterface
{
    /** @var CustomerLoaderInterface[] */
    private iterable $loaders;

    public function __construct
    (
        iterable $loaders = []
    )
    {
        $this->loaders = $loaders;
    }

    public function loadById(string $id): CustomerInterface
    {
        return $this->loadByContext(['id' => $id]);
    }

    public function loadByContext(array $context): CustomerInterface
    {
        foreach ($this->loaders as $loader) {
            $result = $loader->loadByContext($context);

            if($result) {
                return $result;
            }
        }

        throw new CustomerNotFoundException($context);
    }
}