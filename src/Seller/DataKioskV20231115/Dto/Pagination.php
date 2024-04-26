<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\DataKioskV20231115\Dto;

use SellingPartnerApi\Dto;

final class Pagination extends Dto
{
    /**
     * @param  ?string  $nextToken  A token that can be used to fetch the next page of results.
     */
    public function __construct(
        public readonly ?string $nextToken = null,
    ) {
    }
}