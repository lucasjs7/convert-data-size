<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

it('ConvertTo#KiB->MB', function () {
    expect('78384470540.63')->toBe(ConvertDataSize::parser('76547334512342 KiB', 'MB'));
});

it('ConvertTo#EB->GB', function () {
    expect('234000000000.00')->toBe(ConvertDataSize::parser('234 EB', 'GB'));
});

it('ConvertTo#GB->Zbit', function () {
    expect('0.000036542864')->toBe(ConvertDataSize::parser('4567858 GB', 'Zbit', 12));
});
