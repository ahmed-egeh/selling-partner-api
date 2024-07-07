<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\Error;
use SellingPartnerApi\Seller\FBAOutboundV20200701\Dto\GetFulfillmentOrderResult;

final class GetFulfillmentOrderResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => Error::class];

    /**
     * @param  ?GetFulfillmentOrderResult  $payload  The request for the getFulfillmentOrder operation.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?GetFulfillmentOrderResult $payload = null,
        public readonly ?array $errors = null,
    ) {}
}
