<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

it('Unit#KiB->MB', function () {
    expect('78384470.54')->toBe(ConvertDataSize::unit('76547334512.342', 'KiB', 'MB'));
});

it('Unit#EB->GB', function () {
    expect('234000000000.00')->toBe(ConvertDataSize::unit('234', 'EB', 'GB'));
});

it('Unit#GB->Zbit', function () {
    expect('0.000036542864')->toBe(ConvertDataSize::unit('4567858', 'GB', 'Zbit', 12));
});
