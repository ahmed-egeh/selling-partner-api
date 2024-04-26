<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use SellingPartnerApi\Dto;

final class PartneredSmallParcelDataInput extends Dto
{
    protected static array $attributeMap = ['packageList' => 'PackageList', 'carrierName' => 'CarrierName'];

    protected static array $complexArrayTypes = ['packageList' => [PartneredSmallParcelPackageInput::class]];

    /**
     * @param  PartneredSmallParcelPackageInput[]|null  $packageList  A list of dimensions and weight information for packages.
     * @param  ?string  $carrierName  The Amazon-partnered carrier to use for the inbound shipment. **`CarrierName`** values in France (FR), Italy (IT), Spain (ES), the United Kingdom (UK), and the United States (US): `UNITED_PARCEL_SERVICE_INC`. <br> **`CarrierName`** values in Germany (DE): `DHL_STANDARD`,`UNITED_PARCEL_SERVICE_INC`. <br>Default: `UNITED_PARCEL_SERVICE_INC`.
     */
    public function __construct(
        public readonly ?array $packageList = null,
        public readonly ?string $carrierName = null,
    ) {
    }
}