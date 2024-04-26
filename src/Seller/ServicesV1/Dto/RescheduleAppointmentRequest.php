<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class RescheduleAppointmentRequest extends Dto
{
    /**
     * @param  AppointmentTimeInput  $appointmentTime  The input appointment time details.
     * @param  string  $rescheduleReasonCode  The appointment reschedule reason code.
     */
    public function __construct(
        public readonly AppointmentTimeInput $appointmentTime,
        public readonly string $rescheduleReasonCode,
    ) {
    }
}
