<?php

include 'vendor/autoload.php';

use Lucasjs7\ConvertDataSize\ConvertDataSize;

echo ConvertDataSize::parser('110 YiB') . PHP_EOL;
