<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\SupplySourcesV20200701\Dto;

use SellingPartnerApi\Dto;

final class ServicesCapability extends Dto
{
    /**
     * @param  ?bool  $isSupported  When true, `SupplySource` supports the Service capability.
     * @param  ?OperationalConfiguration  $operationalConfiguration  The operational configuration of `supplySources`.
     */
    public function __construct(
        public readonly ?bool $isSupported = null,
        public readonly ?OperationalConfiguration $operationalConfiguration = null,
    ) {
    }
}
