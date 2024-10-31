<?php

include 'vendor/autoload.php';

use Lucasjs7\ConvertDataSize\ConvertDataSize;

echo ConvertDataSize::string('110MiB', 2) . PHP_EOL;
