<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentSandboxV20211028\Dto;

use SellingPartnerApi\Dto;

final class Transaction extends Dto
{
    /**
     * @param  string  $transactionId  The unique identifier returned in the response to the generateOrderScenarios request.
     * @param  string  $status  The current processing status of the transaction.
     * @param  ?TestCaseData  $testCaseData  The set of test case data returned in response to the test data request.
     */
    public function __construct(
        public readonly string $transactionId,
        public readonly string $status,
        public readonly ?TestCaseData $testCaseData = null,
    ) {
    }
}
