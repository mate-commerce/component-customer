<?php

namespace MateCommerce\Component\Customer\Service;

use MateCommerce\Component\Customer\Loader\CustomerLoaderInterface;
use MateCommerce\Component\Customer\Model\CustomerContext;
use MateCommerce\Component\Customer\Storage\Customer\CustomerInterface;
use MateCommerce\Exception\CustomerNotFoundException;

class CustomerService
{
    private CustomerLoaderInterface $customerLoader;

    public function __construct
    (
        CustomerLoaderInterface $customerLoader
    )
    {
        $this->customerLoader = $customerLoader;
    }

    public function loadCustomer(string $id, CustomerContext $context): CustomerInterface
    {
        return $this->customerLoader->loadById($id, $context) ?: throw new CustomerNotFoundException(['id' => $id]);
    }

    public function loadCustomerByCriteria(array $criteria, CustomerContext $context): CustomerInterface
    {
        return $this->customerLoader->loadByCriteria($criteria, $context) ?: throw new CustomerNotFoundException($criteria);
    }
}