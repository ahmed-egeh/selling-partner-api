<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Embedded extends BaseDto
{
    protected static array $complexArrayTypes = ['actions' => [LinkObject::class]];

    /**
     * @param  LinkObject[]  $actions Eligible actions for the specified amazonOrderId.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?array $actions = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}