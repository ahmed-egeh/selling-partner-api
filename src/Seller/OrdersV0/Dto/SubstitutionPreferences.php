<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class SubstitutionPreferences extends Dto
{
    protected static array $attributeMap = [
        'substitutionType' => 'SubstitutionType',
        'substitutionOptions' => 'SubstitutionOptions',
    ];

    protected static array $complexArrayTypes = ['substitutionOptions' => [SubstitutionOption::class]];

    /**
     * @param  string  $substitutionType  The type of substitution that these preferences represent.
     * @param  SubstitutionOption[]|null  $substitutionOptions  A collection of substitution options.
     */
    public function __construct(
        public readonly string $substitutionType,
        public readonly ?array $substitutionOptions = null,
    ) {
    }
}
