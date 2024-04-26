<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\APlusContentV20201101\Dto;

use SellingPartnerApi\Dto;

final class PostContentDocumentAsinRelationsRequest extends Dto
{
    /**
     * @param  string[]  $asinSet  The set of ASINs.
     */
    public function __construct(
        public readonly array $asinSet,
    ) {
    }
}
