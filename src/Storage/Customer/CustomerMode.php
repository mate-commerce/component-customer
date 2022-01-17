<?php

namespace MateCommerce\Component\Customer\Storage\Customer;

enum CustomerMode: string
{
    const GUEST = 'guest';
    const ACCOUNT = 'account';
}