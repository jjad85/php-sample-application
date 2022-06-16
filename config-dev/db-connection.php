<?php

return new PDO("mysql:host=docker-databasecx-1;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
