<?php

namespace StripeWPFS\Terminal;

/**
 * Class ConnectionToken
 *
 * @property string $object String representing the object's type. Objects of the same type share the same value.
 * @property string $location The id of the location that this connection token is scoped to.
 * @property string $secret Your application should pass this token to the Stripe Terminal SDK.
 *
 * @package StripeWPFS\Terminal
 */
class ConnectionToken extends \StripeWPFS\ApiResource
{
    const OBJECT_NAME = 'terminal.connection_token';

    use \StripeWPFS\ApiOperations\Create;
}
