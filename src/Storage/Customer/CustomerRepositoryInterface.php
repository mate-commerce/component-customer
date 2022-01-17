<?php

namespace MateCommerce\Component\Customer\Storage\Customer;

interface CustomerRepositoryInterface
{
    public function findOneBy(array $criteria): ?CustomerInterface;

    public function find(string $id): ?CustomerInterface;
}