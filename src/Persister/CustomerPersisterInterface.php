<?php

namespace MateCommerce\Component\Customer\Persister;

use MateCommerce\Component\Customer\Model\CustomerInterface;

interface CustomerPersisterInterface
{
    public function save(CustomerInterface $customer): bool;
}