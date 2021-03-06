<?php

namespace StripeWPFS\ApiOperations;

/**
 * Trait for retrievable resources. Adds a `retrieve()` static method to the
 * class.
 *
 * This trait should only be applied to classes that derive from StripeObject.
 */
trait Retrieve
{
    /**
     * @param array|string $id The ID of the API resource to retrieve,
     *     or an options array containing an `id` key.
     * @param array|string|null $opts
     *
     * @throws \StripeWPFS\Exception\ApiErrorException if the request fails
     *
     * @return static
     */
    public static function retrieve($id, $opts = null)
    {
        $opts = \StripeWPFS\Util\RequestOptions::parse($opts);
        $instance = new static($id, $opts);
        $instance->refresh();
        return $instance;
    }
}
