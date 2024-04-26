<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductPricingV20220501\Dto;

use SellingPartnerApi\Dto;

final class CompetitiveSummaryResponse extends Dto
{
    /**
     * @param  HttpStatusLine  $status  The HTTP status line associated with the response to an individual request within a batch. For more information, consult [RFC 2616](https://www.w3.org/Protocols/rfc2616/rfc2616-sec6.html).
     * @param  CompetitiveSummaryResponseBody  $body  The `competitiveSummaryResponse` body for a requested ASIN and `marketplaceId`.
     */
    public function __construct(
        public readonly HttpStatusLine $status,
        public readonly CompetitiveSummaryResponseBody $body,
    ) {
    }
}
