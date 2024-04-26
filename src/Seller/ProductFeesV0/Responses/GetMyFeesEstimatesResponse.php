<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ProductFeesV0\Dto\FeesEstimateResult;

final class GetMyFeesEstimatesResponse extends Response
{
    protected static array $complexArrayTypes = ['getMyFeesEstimatesResponse' => [FeesEstimateResult::class]];

    /**
     * @param  FeesEstimateResult[]  $getMyFeesEstimatesResponse  Estimated fees for a list of products.
     */
    public function __construct(
        public readonly array $getMyFeesEstimatesResponse,
    ) {
    }
}
