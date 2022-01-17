<?php

namespace MateCommerce\Component\Customer\Loader;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use MateCommerce\Component\Customer\Storage\Customer\CustomerInterface;
use MateCommerce\Component\Customer\Storage\Customer\CustomerRepositoryInterface;

class CustomerDoctrineOrmLoader implements CustomerLoaderInterface
{
    private ServiceEntityRepository&CustomerRepositoryInterface $customerRepository;

    public function __construct
    (
        ServiceEntityRepository&CustomerRepositoryInterface $customerRepository
    )
    {
        $this->customerRepository = $customerRepository;
    }

    public function loadById(string $id): CustomerInterface
    {
        return $this->customerRepository->find($id);
    }

    public function loadByCriteria(array $criteria): CustomerInterface
    {
        return $this->customerRepository->findOneBy($criteria);
    }
}