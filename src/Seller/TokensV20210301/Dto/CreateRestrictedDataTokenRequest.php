<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\TokensV20210301\Dto;

use SellingPartnerApi\Dto;

final class CreateRestrictedDataTokenRequest extends Dto
{
    protected static array $complexArrayTypes = ['restrictedResources' => [RestrictedResource::class]];

    /**
     * @param  RestrictedResource[]  $restrictedResources  A list of restricted resources.
     *                                                     Maximum: 50
     * @param  ?string  $targetApplication  The application ID for the target application to which access is being delegated.
     */
    public function __construct(
        public readonly array $restrictedResources,
        public readonly ?string $targetApplication = null,
    ) {
    }
}
