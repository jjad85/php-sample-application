<?php

/**
 * Returns the best negotiated format according to RFC 7231.
 */

require __DIR__ .  '/../vendor/autoload.php';
ini_set('display_errors', 1);

return (new \Negotiation\Negotiator())
    ->getBest($_SERVER["HTTP_ACCEPT"], ['text/html', 'application/json'])
    ->getValue();
