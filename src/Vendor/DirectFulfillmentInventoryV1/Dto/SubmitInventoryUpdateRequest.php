<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentInventoryV1\Dto;

use SellingPartnerApi\Dto;

final class SubmitInventoryUpdateRequest extends Dto
{
    /**
     * @param  ?InventoryUpdate  $inventory
     */
    public function __construct(
        public readonly ?InventoryUpdate $inventory = null,
    ) {
    }
}
