<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class Buyer extends Dto
{
    /**
     * @param  ?string  $buyerId  The identifier of the buyer.
     * @param  ?string  $name  The name of the buyer.
     * @param  ?string  $phone  The phone number of the buyer.
     * @param  ?bool  $isPrimeMember  When true, the service is for an Amazon Prime buyer.
     */
    public function __construct(
        public readonly ?string $buyerId = null,
        public readonly ?string $name = null,
        public readonly ?string $phone = null,
        public readonly ?bool $isPrimeMember = null,
    ) {
    }
}
