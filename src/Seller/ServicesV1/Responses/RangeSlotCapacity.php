<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ServicesV1\Dto\RangeCapacity;

final class RangeSlotCapacity extends Response
{
    protected static array $complexArrayTypes = ['capacities' => [RangeCapacity::class]];

    /**
     * @param  ?string  $resourceId  Resource Identifier.
     * @param  RangeCapacity[]|null  $capacities  Array of range capacities where each entry is for a specific capacity type.
     * @param  ?string  $nextPageToken  Next page token, if there are more pages.
     */
    public function __construct(
        public readonly ?string $resourceId = null,
        public readonly ?array $capacities = null,
        public readonly ?string $nextPageToken = null,
    ) {
    }
}
