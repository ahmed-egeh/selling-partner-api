<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class TaxDetail extends Dto
{
    /**
     * @param  string  $taxType  Indicates the type of tax.
     * @param  string  $taxRegistrationNumber  The shipper's tax registration number associated with the shipment for customs compliance purposes in certain regions.
     */
    public function __construct(
        public readonly string $taxType,
        public readonly string $taxRegistrationNumber,
    ) {
    }
}
