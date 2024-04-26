<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Dto;

use SellingPartnerApi\Dto;

final class GiftDetails extends Dto
{
    /**
     * @param  ?string  $giftMessage  Gift message to be printed in shipment.
     * @param  ?string  $giftWrapId  Gift wrap identifier for the gift wrapping, if any.
     */
    public function __construct(
        public readonly ?string $giftMessage = null,
        public readonly ?string $giftWrapId = null,
    ) {
    }
}
