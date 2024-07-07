<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Route extends Dto
{
    protected static array $complexArrayTypes = ['stops' => Stop::class];

    /**
     * @param  Stop[]  $stops  The port or location involved in transporting the cargo, as specified in transportation contracts or operational plans.
     */
    public function __construct(
        public readonly array $stops,
    ) {}
}
