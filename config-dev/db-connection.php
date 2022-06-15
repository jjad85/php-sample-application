<?php

return new PDO("mysql:host=databaseCX;dbname=sample", "sampleuser", "samplepass", [PDO::ATTR_PERSISTENT => true]);
