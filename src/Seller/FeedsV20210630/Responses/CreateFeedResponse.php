<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use SellingPartnerApi\Response;

final class CreateFeedResponse extends Response
{
    /**
     * @param  string  $feedId  The identifier for the feed. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $feedId,
    ) {
    }
}
