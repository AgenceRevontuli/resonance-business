<?php

namespace StripeWPFS;

/**
 * Class Refund
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property int $amount Amount, in %s.
 * @property string|\StripeWPFS\BalanceTransaction|null $balance_transaction Balance transaction that describes the impact on your account balance.
 * @property string|\StripeWPFS\Charge|null $charge ID of the charge that was refunded.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string $currency Three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html">ISO currency code</a>, in lowercase. Must be a <a href="https://stripe.com/docs/currencies">supported currency</a>.
 * @property string $description An arbitrary string attached to the object. Often useful for displaying to users. (Available on non-card refunds only)
 * @property string|\StripeWPFS\BalanceTransaction $failure_balance_transaction If the refund failed, this balance transaction describes the adjustment made on your account balance that reverses the initial balance transaction.
 * @property string $failure_reason If the refund failed, the reason for refund failure if known. Possible values are <code>lost_or_stolen_card</code>, <code>expired_or_canceled_card</code>, or <code>unknown</code>.
 * @property \StripeWPFS\StripeObject $metadata Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property string|\StripeWPFS\PaymentIntent|null $payment_intent ID of the PaymentIntent that was refunded.
 * @property string|null $reason Reason for the refund, either user-provided (<code>duplicate</code>, <code>fraudulent</code>, or <code>requested_by_customer</code>) or generated by Stripe internally (<code>expired_uncaptured_charge</code>).
 * @property string|null $receipt_number This is the transaction number that appears on email receipts sent for this refund.
 * @property string|\StripeWPFS\TransferReversal|null $source_transfer_reversal The transfer reversal that is associated with the refund. Only present if the charge came from another Stripe account. See the Connect documentation for details.
 * @property string|null $status Status of the refund. For credit card refunds, this can be <code>pending</code>, <code>succeeded</code>, or <code>failed</code>. For other types of refunds, it can be <code>pending</code>, <code>succeeded</code>, <code>failed</code>, or <code>canceled</code>. Refer to our <a href="https://stripe.com/docs/refunds#failed-refunds">refunds</a> documentation for more details.
 * @property string|\StripeWPFS\TransferReversal|null $transfer_reversal If the accompanying transfer was reversed, the transfer reversal object. Only applicable if the charge was created using the destination parameter.
 *
 * @package StripeWPFS
 */
class Refund extends ApiResource
{
    const OBJECT_NAME = 'refund';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    /**
     * Possible string representations of the failure reason.
     *
     * @see https://stripe.com/docs/api/refunds/object#refund_object-failure_reason
     */
    const FAILURE_REASON                     = 'expired_or_canceled_card';
    const FAILURE_REASON_LOST_OR_STOLEN_CARD = 'lost_or_stolen_card';
    const FAILURE_REASON_UNKNOWN             = 'unknown';

    /**
     * Possible string representations of the refund reason.
     *
     * @see https://stripe.com/docs/api/refunds/object#refund_object-reason
     */
    const REASON_DUPLICATE             = 'duplicate';
    const REASON_FRAUDULENT            = 'fraudulent';
    const REASON_REQUESTED_BY_CUSTOMER = 'requested_by_customer';

    /**
     * Possible string representations of the refund status.
     *
     * @see https://stripe.com/docs/api/refunds/object#refund_object-status
     */
    const STATUS_CANCELED  = 'canceled';
    const STATUS_FAILED    = 'failed';
    const STATUS_PENDING   = 'pending';
    const STATUS_SUCCEEDED = 'succeeded';
}
