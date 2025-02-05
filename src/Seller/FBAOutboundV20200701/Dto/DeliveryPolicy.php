<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class DeliveryPolicy extends Dto
{
    /**
     * @param  ?DeliveryMessage  $message  Localized messaging for a delivery offering.
     */
    public function __construct(
        public ?DeliveryMessage $message = null,
    ) {}
}
