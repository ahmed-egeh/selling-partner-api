<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV1\Dto;

use SellingPartnerApi\Dto;

final class Container extends Dto
{
    protected static array $complexArrayTypes = ['items' => ContainerItem::class];

    /**
     * @param  string  $containerReferenceId  An identifier for the container. This must be unique within all the containers in the same shipment.
     * @param  Currency  $value  The total value of all items in the container.
     * @param  Dimensions  $dimensions  A set of measurements for a three-dimensional object.
     * @param  ContainerItem[]  $items  A list of the items in the container.
     * @param  Weight  $weight  The weight.
     * @param  ?string  $containerType  The type of physical container being used. (always 'PACKAGE')
     */
    public function __construct(
        public string $containerReferenceId,
        public Currency $value,
        public Dimensions $dimensions,
        public array $items,
        public Weight $weight,
        public ?string $containerType = null,
    ) {}
}
