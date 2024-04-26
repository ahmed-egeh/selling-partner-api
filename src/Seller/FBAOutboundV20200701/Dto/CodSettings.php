<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAOutboundV20200701\Dto;

use SellingPartnerApi\Dto;

final class CodSettings extends Dto
{
    /**
     * @param  bool  $isCodRequired  When true, this fulfillment order requires a COD (Cash On Delivery) payment.
     * @param  ?Money  $codCharge  An amount of money, including units in the form of currency.
     * @param  ?Money  $codChargeTax  An amount of money, including units in the form of currency.
     * @param  ?Money  $shippingCharge  An amount of money, including units in the form of currency.
     * @param  ?Money  $shippingChargeTax  An amount of money, including units in the form of currency.
     */
    public function __construct(
        public readonly bool $isCodRequired,
        public readonly ?Money $codCharge = null,
        public readonly ?Money $codChargeTax = null,
        public readonly ?Money $shippingCharge = null,
        public readonly ?Money $shippingChargeTax = null,
    ) {
    }
}
