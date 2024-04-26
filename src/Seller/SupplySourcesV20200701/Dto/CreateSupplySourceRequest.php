<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class CreateSupplySourceRequest extends Dto
{
    /**
     * @param  string  $supplySourceCode  The seller-provided unique supply source code.
     * @param  string  $alias  The custom alias for this supply source
     * @param  Address  $address  A physical address.
     */
    public function __construct(
        public readonly string $supplySourceCode,
        public readonly string $alias,
        public readonly Address $address,
    ) {
    }
}
