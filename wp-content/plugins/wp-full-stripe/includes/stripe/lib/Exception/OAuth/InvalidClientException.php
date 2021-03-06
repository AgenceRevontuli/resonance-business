<?php

namespace StripeWPFS\Exception\OAuth;

/**
 * InvalidClientException is thrown when the client_id does not belong to you,
 * the stripe_user_id does not exist or is not connected to your application,
 * or the API key mode (live or test mode) does not match the client_id mode.
 *
 * @package StripeWPFS\Exception\OAuth
 */
class InvalidClientException extends OAuthErrorException
{
}
