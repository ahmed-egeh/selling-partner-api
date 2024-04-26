<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\CatalogItemsV20201201\Dto\Error;

final class ErrorList extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  Error[]  $errors
     */
    public function __construct(
        public readonly array $errors,
    ) {
    }
}
