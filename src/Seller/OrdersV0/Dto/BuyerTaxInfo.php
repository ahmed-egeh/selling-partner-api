<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class BuyerTaxInfo extends Dto
{
    protected static array $attributeMap = [
        'companyLegalName' => 'CompanyLegalName',
        'taxingRegion' => 'TaxingRegion',
        'taxClassifications' => 'TaxClassifications',
    ];

    protected static array $complexArrayTypes = ['taxClassifications' => [TaxClassification::class]];

    /**
     * @param  ?string  $companyLegalName  The legal name of the company.
     * @param  ?string  $taxingRegion  The country or region imposing the tax.
     * @param  TaxClassification[]|null  $taxClassifications  A list of tax classifications that apply to the order.
     */
    public function __construct(
        public readonly ?string $companyLegalName = null,
        public readonly ?string $taxingRegion = null,
        public readonly ?array $taxClassifications = null,
    ) {
    }
}