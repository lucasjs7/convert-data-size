<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

it('Unit#kbit', function () {
    expect('4320432029250')->toBe(ConvertDataSize::unit('34563456234', 'kbit'));
});

it('Unit#Kibit', function () {
    expect('441758038842414749952')->toBe(ConvertDataSize::unit('3451234678456365234', 'Kibit'));
});

it('Unit#kB', function () {
    expect('2345456724553000')->toBe(ConvertDataSize::unit('2345456724553', 'kB'));
});

it('Unit#KiB', function () {
    expect('78384470540638208')->toBe(ConvertDataSize::unit('76547334512342', 'KiB'));
});

it('Unit#Mbit', function () {
    expect('67667659556625000')->toBe(ConvertDataSize::unit('541341276453', 'Mbit'));
});

it('Unit#Mibit', function () {
    expect('566552512823296')->toBe(ConvertDataSize::unit('4322452643', 'Mibit'));
});

it('Unit#MB', function () {
    expect('178978533467645000000')->toBe(ConvertDataSize::unit('178978533467645', 'MB'));
});

it('Unit#MiB', function () {
    expect('665396166391758848')->toBe(ConvertDataSize::unit('634571234123', 'MiB'));
});

it('Unit#Gbit', function () {
    expect('51543233000000000')->toBe(ConvertDataSize::unit('412345864', 'Gbit'));
});

it('Unit#Gibit', function () {
    expect('46388789536308068352')->toBe(ConvertDataSize::unit('345623415234', 'Gibit'));
});

it('Unit#GB', function () {
    expect('760845678456000000000')->toBe(ConvertDataSize::unit('760845678456', 'GB'));
});

it('Unit#GiB', function () {
    expect('96172085809237721088')->toBe(ConvertDataSize::unit('89567234562', 'GiB'));
});

it('Unit#Tbit', function () {
    expect('6790250000000000')->toBe(ConvertDataSize::unit('54322', 'Tbit'));
});

it('Unit#Tibit', function () {
    expect('133939240121504104448')->toBe(ConvertDataSize::unit('974536234', 'Tibit'));
});

it('Unit#TB', function () {
    expect('1235672342000000000000')->toBe(ConvertDataSize::unit('1235672342', 'TB'));
});

it('Unit#TiB', function () {
    expect('4982143371662327808')->toBe(ConvertDataSize::unit('4531233', 'TiB'));
});

it('Unit#Pbit', function () {
    expect('79176551500000000000000')->toBe(ConvertDataSize::unit('633412412', 'Pbit'));
});

it('Unit#Pibit', function () {
    expect('442104864620079480832')->toBe(ConvertDataSize::unit('3141344', 'Pibit'));
});

it('Unit#PB', function () {
    expect('23456234000000000000000')->toBe(ConvertDataSize::unit('23456234', 'PB'));
});

it('Unit#PiB', function () {
    expect('7356629991309705216')->toBe(ConvertDataSize::unit('6534', 'PiB'));
});

it('Unit#Ebit', function () {
    expect('51625000000000000000')->toBe(ConvertDataSize::unit('413', 'Ebit'));
});

it('Unit#Eibit', function () {
    expect('112842192263395147776')->toBe(ConvertDataSize::unit('783', 'Eibit'));
});

it('Unit#EB', function () {
    expect('234000000000000000000')->toBe(ConvertDataSize::unit('234', 'EB'));
});

it('Unit#EiB', function () {
    expect('728646390911527288832')->toBe(ConvertDataSize::unit('632', 'EiB'));
});

it('Unit#Zbit', function () {
    expect('79000000000000000000000')->toBe(ConvertDataSize::unit('632', 'Zbit'));
});

it('Unit#Zibit', function () {
    expect('7673845534663173472256')->toBe(ConvertDataSize::unit('52', 'Zibit'));
});

it('Unit#ZB', function () {
    expect('23000000000000000000000')->toBe(ConvertDataSize::unit('23', 'ZB'));
});

it('Unit#ZiB', function () {
    expect('63751947518740210384896')->toBe(ConvertDataSize::unit('54', 'ZiB'));
});

it('Unit#Ybit', function () {
    expect('1875000000000000000000000')->toBe(ConvertDataSize::unit('15', 'Ybit'));
});

it('Unit#Yibit', function () {
    expect('3777893186295716170956800')->toBe(ConvertDataSize::unit('25', 'Yibit'));
});

it('Unit#YB', function () {
    expect('634000000000000000000000000')->toBe(ConvertDataSize::unit('634', 'YB'));
});

it('Unit#YiB', function () {
    expect('499286363500841849153650688')->toBe(ConvertDataSize::unit('413', 'YiB'));
});
