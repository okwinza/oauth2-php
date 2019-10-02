<?php

declare(strict_types=1);

namespace OAuth2;

use OAuth2\Event\PreGrantAccessTokenEvent;

class OAuth2Events
{
    /**
     * The PRE_GRANT_ACCESS_TOKEN event occurs before the access token generation.
     *
     * This allows to modify the grant access token parameters
     *
     * @Event(PreGrantAccessTokenEvent::class)
     * @var string
     */
    const PRE_GRANT_ACCESS_TOKEN   = "oauth2.pre.grant.access_token";
}