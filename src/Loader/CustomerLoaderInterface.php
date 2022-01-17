<?php

namespace MateCommerce\Component\Customer\Loader;

use MateCommerce\Component\Customer\Model\CustomerContext;
use MateCommerce\Component\Customer\Storage\Customer\CustomerInterface;

interface CustomerLoaderInterface
{
    public const SERVICE_TAG = 'mate.commerce.component.customer.loader';

    public function supports(CustomerContext $context): bool;

    public function loadById(string $id, CustomerContext $context): CustomerInterface;

    public function loadByCriteria(array $criteria, CustomerContext $context): CustomerInterface;
}