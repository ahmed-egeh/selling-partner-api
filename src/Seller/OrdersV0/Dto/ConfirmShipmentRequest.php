<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ConfirmShipmentRequest extends Dto
{
    /**
     * @param  PackageDetail  $packageDetail  Properties of packages
     * @param  string  $marketplaceId  The unobfuscated marketplace identifier.
     * @param  ?string  $codCollectionMethod  The cod collection method, support in JP only.
     */
    public function __construct(
        public readonly PackageDetail $packageDetail,
        public readonly string $marketplaceId,
        public readonly ?string $codCollectionMethod = null,
    ) {
    }
}
