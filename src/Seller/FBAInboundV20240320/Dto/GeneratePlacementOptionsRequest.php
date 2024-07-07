<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class GeneratePlacementOptionsRequest extends Dto
{
    protected static array $complexArrayTypes = ['customPlacement' => CustomPlacementInput::class];

    /**
     * @param  CustomPlacementInput[]|null  $customPlacement  Custom placement options to be added to the plan.
     */
    public function __construct(
        public readonly ?array $customPlacement = null,
    ) {}
}
