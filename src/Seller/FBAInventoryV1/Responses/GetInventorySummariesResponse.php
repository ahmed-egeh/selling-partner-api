<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInventoryV1\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInventoryV1\Dto\Error;
use SellingPartnerApi\Seller\FBAInventoryV1\Dto\GetInventorySummariesResult;
use SellingPartnerApi\Seller\FBAInventoryV1\Dto\Pagination;

final class GetInventorySummariesResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => Error::class];

    /**
     * @param  ?GetInventorySummariesResult  $payload  The payload schema for the getInventorySummaries operation.
     * @param  ?Pagination  $pagination  The process of returning the results to a request in batches of a defined size called pages. This is done to exercise some control over result size and overall throughput. It's a form of traffic management.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetInventorySummariesResult $payload = null,
        public readonly ?Pagination $pagination = null,
        public readonly ?array $errors = null,
    ) {}
}
