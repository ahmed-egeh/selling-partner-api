<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class Primary extends Dto
{
    /**
     * @param  ?string  $email  The email address to which email messages are delivered.
     * @param  ?string  $phone  The phone number of the person, business or institution.
     */
    public function __construct(
        public readonly ?string $email = null,
        public readonly ?string $phone = null,
    ) {
    }
}
