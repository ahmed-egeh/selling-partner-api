<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ConfirmShipmentOrderItem extends Dto
{
    /**
     * @param  string  $orderItemId  The unique identifier of the order item.
     * @param  int  $quantity  The quantity of the item.
     * @param  ?string[]  $transparencyCodes  A list of order items.
     */
    public function __construct(
        public readonly string $orderItemId,
        public readonly int $quantity,
        public readonly ?array $transparencyCodes = null,
    ) {
    }
}
