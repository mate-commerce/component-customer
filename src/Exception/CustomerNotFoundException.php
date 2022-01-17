<?php

namespace MateCommerce\Component\Customer\Exception;


class CustomerNotFoundException extends CustomerException
{
    private array $criteria;

    public function __construct(array $criteria, string $message = null)
    {
        $this->criteria = $criteria;

        if ($message === null) {
            $message = 'Could not find customer by given criteria';
        }

        parent::__construct($message);
    }

    public function getcriteria(): array
    {
        return $this->criteria;
    }
}