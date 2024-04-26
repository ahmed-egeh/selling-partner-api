<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class RejectedOrder extends Dto
{
    /**
     * @param  string  $amazonOrderId  An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     * @param  ?Error  $error  Error response returned when the request is unsuccessful.
     */
    public function __construct(
        public readonly string $amazonOrderId,
        public readonly ?Error $error = null,
    ) {
    }
}
