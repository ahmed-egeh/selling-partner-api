<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class InvalidReturnItem extends Dto
{
    /**
     * @param  string  $sellerReturnItemId  An identifier assigned by the seller to the return item.
     * @param  string  $sellerFulfillmentOrderItemId  The identifier assigned to the item by the seller when the fulfillment order was created.
     * @param  InvalidItemReason  $invalidItemReason  The reason that the item is invalid for return.
     */
    public function __construct(
        public readonly string $sellerReturnItemId,
        public readonly string $sellerFulfillmentOrderItemId,
        public readonly InvalidItemReason $invalidItemReason,
    ) {
    }
}
