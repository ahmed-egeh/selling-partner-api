<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class SupplySourceList extends Dto
{
    /**
     * @param  ?string  $alias  The custom alias for this supply source
     * @param  ?string  $supplySourceId  An Amazon generated unique supply source ID.
     * @param  ?string  $supplySourceCode  The seller-provided unique supply source code.
     * @param  ?Address  $address  A physical address.
     */
    public function __construct(
        public readonly ?string $alias = null,
        public readonly ?string $supplySourceId = null,
        public readonly ?string $supplySourceCode = null,
        public readonly ?Address $address = null,
    ) {
    }
}
