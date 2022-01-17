<?php

namespace MateCommerce\Component\Customer\Storage\Customer;

interface CustomerInterface
{
    public function getId(): ?string;

    public function getEmail(): ?string;
    public function setEmail(): static;

    public function getPassword(): ?string;
    public function setPassword(): static;

    public function getMode(): CustomerMode;
    public function setMode(CustomerMode $mode): static;
}