<?php

namespace App\Repositories\Contracts;

Interface PromoCodeRepositoryInterface
{
    public function getAllPromoCode();

    public function findByCode(string $code);
}
