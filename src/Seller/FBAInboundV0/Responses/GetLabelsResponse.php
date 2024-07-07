<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: SellingPartnerApi\Generator\Generators\ResponseGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\LabelDownloadUrl;

final class GetLabelsResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => Error::class];

    /**
     * @param  ?LabelDownloadUrl  $payload  Download URL for a label
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?LabelDownloadUrl $payload = null,
        public readonly ?array $errors = null,
    ) {}
}
