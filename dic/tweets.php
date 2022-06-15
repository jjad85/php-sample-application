<?php

require __DIR__ .  '/../vendor/autoload.php';
ini_set('display_errors', 1);

return new Service\TweetsService(
    require "config/db-connection.php"
);
