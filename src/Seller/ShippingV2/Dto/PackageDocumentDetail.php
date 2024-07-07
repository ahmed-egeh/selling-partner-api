<?php

/**
 * This file is auto-generated by Saloon SDK Generator
 * Generator: Crescat\SaloonSdkGenerator\Generators\DtoGenerator
 * Do not modify it directly.
 */

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use SellingPartnerApi\Dto;

final class PackageDocumentDetail extends Dto
{
    protected static array $complexArrayTypes = ['packageDocuments' => PackageDocument::class];

    /**
     * @param  string  $packageClientReferenceId  A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation.
     * @param  PackageDocument[]  $packageDocuments  A list of documents related to a package.
     * @param  ?string  $trackingId  The carrier generated identifier for a package in a purchased shipment.
     */
    public function __construct(
        public readonly string $packageClientReferenceId,
        public readonly array $packageDocuments,
        public readonly ?string $trackingId = null,
    ) {}
}
