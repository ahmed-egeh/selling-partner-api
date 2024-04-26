<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class RegulatedInformation extends Dto
{
    protected static array $attributeMap = ['fields' => 'Fields'];

    protected static array $complexArrayTypes = ['fields' => [RegulatedInformationField::class]];

    /**
     * @param  RegulatedInformationField[]  $fields  A list of regulated information fields as collected from the regulatory form.
     */
    public function __construct(
        public readonly array $fields,
    ) {
    }
}
