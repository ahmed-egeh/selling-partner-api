<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FeedsV20210630\Responses;

use SellingPartnerApi\Response;

final class GetFeedsResponse extends Response
{
    protected static array $complexArrayTypes = ['feeds' => [Feed::class]];

    /**
     * @param  Feed[]  $feeds  A list of feeds.
     * @param  ?string  $nextToken  Returned when the number of results exceeds pageSize. To get the next page of results, call the getFeeds operation with this token as the only parameter.
     */
    public function __construct(
        public readonly array $feeds,
        public readonly ?string $nextToken = null,
    ) {
    }
}
