<?php

namespace StripeWPFS;

/**
 * Class Customer
 *
 * @property string $id Unique identifier for the object.
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property \StripeWPFS\StripeObject|null $address The customer's address.
 * @property int $balance Current balance, if any, being stored on the customer. If negative, the customer has credit to apply to their next invoice. If positive, the customer has an amount owed that will be added to their next invoice. The balance does not refer to any unpaid invoices; it solely takes into account amounts that have yet to be successfully applied to any invoice. This balance is only taken into account as invoices are finalized.
 * @property int $created Time at which the object was created. Measured in seconds since the Unix epoch.
 * @property string|null $currency Three-letter <a href="https://stripe.com/docs/currencies">ISO code for the currency</a> the customer can be charged in for recurring billing purposes.
 * @property string|\StripeWPFS\StripeObject|null $default_source <p>ID of the default payment source for the customer.</p><p>If you are using payment methods created via the PaymentMethods API, see the <a href="https://stripe.com/docs/api/customers/object#customer_object-invoice_settings-default_payment_method">invoice_settings.default_payment_method</a> field instead.</p>
 * @property bool|null $delinquent When the customer's latest invoice is billed by charging automatically, delinquent is true if the invoice's latest charge is failed. When the customer's latest invoice is billed by sending an invoice, delinquent is true if the invoice is not paid by its due date.
 * @property string|null $description An arbitrary string attached to the object. Often useful for displaying to users.
 * @property \StripeWPFS\Discount|null $discount Describes the current discount active on the customer, if there is one.
 * @property string|null $email The customer's email address.
 * @property string|null $invoice_prefix The prefix for the customer used to generate unique invoice numbers.
 * @property \StripeWPFS\StripeObject $invoice_settings
 * @property bool $livemode Has the value <code>true</code> if the object exists in live mode or the value <code>false</code> if the object exists in test mode.
 * @property \StripeWPFS\StripeObject $metadata Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
 * @property string|null $name The customer's full name or business name.
 * @property string|null $phone The customer's phone number.
 * @property string[]|null $preferred_locales The customer's preferred locales (languages), ordered by preference.
 * @property \StripeWPFS\StripeObject|null $shipping Mailing and shipping address for the customer. Appears on invoices emailed to this customer.
 * @property \StripeWPFS\Collection $sources The customer's payment sources, if any.
 * @property \StripeWPFS\Collection $subscriptions The customer's current subscriptions, if any.
 * @property string|null $tax_exempt Describes the customer's tax exemption status. One of <code>none</code>, <code>exempt</code>, or <code>reverse</code>. When set to <code>reverse</code>, invoice and receipt PDFs include the text <strong>&quot;Reverse charge&quot;</strong>.
 * @property \StripeWPFS\Collection $tax_ids The customer's tax IDs.
 *
 * @package StripeWPFS
 */
class Customer extends ApiResource
{
    const OBJECT_NAME = 'customer';

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Delete;
    use ApiOperations\NestedResource;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

    /**
     * Possible string representations of the customer's type of tax exemption.
     *
     * @see https://stripe.com/docs/api/customers/object#customer_object-tax_exempt
     */
    const TAX_EXEMPT_NONE    = 'none';
    const TAX_EXEMPT_EXEMPT  = 'exempt';
    const TAX_EXEMPT_REVERSE = 'reverse';

    public static function getSavedNestedResources()
    {
        static $savedNestedResources = null;
        if (null === $savedNestedResources) {
            $savedNestedResources = new Util\Set([
                'source',
            ]);
        }
        return $savedNestedResources;
    }

    /**
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @return \StripeWPFS\Customer The updated customer.
     */
    public function deleteDiscount($params = null, $opts = null)
    {
        $url = $this->instanceUrl() . '/discount';
        list($response, $opts) = $this->_request('delete', $url, $params, $opts);
        $this->refreshFrom(['discount' => null], $opts, true);
    }

    const PATH_BALANCE_TRANSACTIONS = '/balance_transactions';

    /**
     * @param string $id The ID of the customer on which to retrieve the customer balance transactions.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\Collection The list of customer balance transactions.
     */
    public static function allBalanceTransactions($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_BALANCE_TRANSACTIONS, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer on which to create the customer balance transaction.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\CustomerBalanceTransaction
     */
    public static function createBalanceTransaction($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_BALANCE_TRANSACTIONS, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the customer balance transaction belongs.
     * @param string $balanceTransactionId The ID of the customer balance transaction to retrieve.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\CustomerBalanceTransaction
     */
    public static function retrieveBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)
    {
        return self::_retrieveNestedResource($id, static::PATH_BALANCE_TRANSACTIONS, $balanceTransactionId, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the customer balance transaction belongs.
     * @param string $balanceTransactionId The ID of the customer balance transaction to update.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\CustomerBalanceTransaction
     */
    public static function updateBalanceTransaction($id, $balanceTransactionId, $params = null, $opts = null)
    {
        return self::_updateNestedResource($id, static::PATH_BALANCE_TRANSACTIONS, $balanceTransactionId, $params, $opts);
    }

    const PATH_SOURCES = '/sources';

    /**
     * @param string $id The ID of the customer on which to retrieve the payment sources.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\Collection The list of payment sources (AlipayAccount, BankAccount, BitcoinReceiver, Card or Source).
     */
    public static function allSources($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_SOURCES, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer on which to create the payment source.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\AlipayAccount|\StripeWPFS\BankAccount|\StripeWPFS\BitcoinReceiver|\StripeWPFS\Card|\StripeWPFS\Source
     */
    public static function createSource($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_SOURCES, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the payment source belongs.
     * @param string $sourceId The ID of the payment source to delete.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\AlipayAccount|\StripeWPFS\BankAccount|\StripeWPFS\BitcoinReceiver|\StripeWPFS\Card|\StripeWPFS\Source
     */
    public static function deleteSource($id, $sourceId, $params = null, $opts = null)
    {
        return self::_deleteNestedResource($id, static::PATH_SOURCES, $sourceId, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the payment source belongs.
     * @param string $sourceId The ID of the payment source to retrieve.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\AlipayAccount|\StripeWPFS\BankAccount|\StripeWPFS\BitcoinReceiver|\StripeWPFS\Card|\StripeWPFS\Source
     */
    public static function retrieveSource($id, $sourceId, $params = null, $opts = null)
    {
        return self::_retrieveNestedResource($id, static::PATH_SOURCES, $sourceId, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the payment source belongs.
     * @param string $sourceId The ID of the payment source to update.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\AlipayAccount|\StripeWPFS\BankAccount|\StripeWPFS\BitcoinReceiver|\StripeWPFS\Card|\StripeWPFS\Source
     */
    public static function updateSource($id, $sourceId, $params = null, $opts = null)
    {
        return self::_updateNestedResource($id, static::PATH_SOURCES, $sourceId, $params, $opts);
    }

    const PATH_TAX_IDS = '/tax_ids';

    /**
     * @param string $id The ID of the customer on which to retrieve the tax ids.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\Collection The list of tax ids.
     */
    public static function allTaxIds($id, $params = null, $opts = null)
    {
        return self::_allNestedResources($id, static::PATH_TAX_IDS, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer on which to create the tax id.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\TaxId
     */
    public static function createTaxId($id, $params = null, $opts = null)
    {
        return self::_createNestedResource($id, static::PATH_TAX_IDS, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the tax id belongs.
     * @param string $taxIdId The ID of the tax id to delete.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\TaxId
     */
    public static function deleteTaxId($id, $taxIdId, $params = null, $opts = null)
    {
        return self::_deleteNestedResource($id, static::PATH_TAX_IDS, $taxIdId, $params, $opts);
    }

    /**
     * @param string $id The ID of the customer to which the tax id belongs.
     * @param string $taxIdId The ID of the tax id to retrieve.
     * @param array|null $params
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return \StripeWPFS\TaxId
     */
    public static function retrieveTaxId($id, $taxIdId, $params = null, $opts = null)
    {
        return self::_retrieveNestedResource($id, static::PATH_TAX_IDS, $taxIdId, $params, $opts);
    }
}
