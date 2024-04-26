<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class ServiceLocation extends Dto
{
    /**
     * @param  ?string  $serviceLocationType  The location of the service job.
     * @param  ?Address  $address  The shipping address for the service job.
     */
    public function __construct(
        public readonly ?string $serviceLocationType = null,
        public readonly ?Address $address = null,
    ) {
    }
}
