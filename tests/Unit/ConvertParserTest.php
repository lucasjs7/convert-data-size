<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

it('Parser#kbit', function () {
    expect('4320432029.25')->toBe(ConvertDataSize::parser('34563456.234 kbit'));
});

it('Parser#Kibit', function () {
    expect('441758038842414749952.00')->toBe(ConvertDataSize::parser('3451234678456365234 Kibit'));
});

it('Parser#kB', function () {
    expect('2345456724553000.00')->toBe(ConvertDataSize::parser('2345456724553 kB'));
});

it('Parser#KiB', function () {
    expect('78384470540638208.00')->toBe(ConvertDataSize::parser('76547334512342 KiB'));
});

it('Parser#Mbit', function () {
    expect('67667659556625000.00')->toBe(ConvertDataSize::parser('541341276453 Mbit'));
});

it('Parser#Mibit', function () {
    expect('566552512823296.00')->toBe(ConvertDataSize::parser('4322452643 Mibit'));
});

it('Parser#MB', function () {
    expect('178978533467645000000.00')->toBe(ConvertDataSize::parser('178978533467645 MB'));
});

it('Parser#MiB', function () {
    expect('665396166391758848.00')->toBe(ConvertDataSize::parser('634571234123 MiB'));
});

it('Parser#Gbit', function () {
    expect('51543233000000000.00')->toBe(ConvertDataSize::parser('412345864 Gbit'));
});

it('Parser#Gibit', function () {
    expect('46388789536308068352.00')->toBe(ConvertDataSize::parser('345623415234 Gibit'));
});

it('Parser#GB', function () {
    expect('760845678456000000000.00')->toBe(ConvertDataSize::parser('760845678456 GB'));
});

it('Parser#GiB', function () {
    expect('96172085809237721088.00')->toBe(ConvertDataSize::parser('89567234562 GiB'));
});

it('Parser#Tbit', function () {
    expect('6790250000000000.00')->toBe(ConvertDataSize::parser('54322 Tbit'));
});

it('Parser#Tibit', function () {
    expect('133939240121504104448.00')->toBe(ConvertDataSize::parser('974536234 Tibit'));
});

it('Parser#TB', function () {
    expect('1235672342000000000000.00')->toBe(ConvertDataSize::parser('1235672342 TB'));
});

it('Parser#TiB', function () {
    expect('4982143371662327808.00')->toBe(ConvertDataSize::parser('4531233 TiB'));
});

it('Parser#Pbit', function () {
    expect('79176551500000000000000.00')->toBe(ConvertDataSize::parser('633412412 Pbit'));
});

it('Parser#Pibit', function () {
    expect('442104864620079480832.00')->toBe(ConvertDataSize::parser('3141344 Pibit'));
});

it('Parser#PB', function () {
    expect('23456234000000000000000.00')->toBe(ConvertDataSize::parser('23456234 PB'));
});

it('Parser#PiB', function () {
    expect('7356629991309705216.00')->toBe(ConvertDataSize::parser('6534 PiB'));
});

it('Parser#Ebit', function () {
    expect('51625000000000000000.00')->toBe(ConvertDataSize::parser('413 Ebit'));
});

it('Parser#Eibit', function () {
    expect('112842192263395147776.00')->toBe(ConvertDataSize::parser('783 Eibit'));
});

it('Parser#EB', function () {
    expect('234000000000000000000.00')->toBe(ConvertDataSize::parser('234 EB'));
});

it('Parser#EiB', function () {
    expect('728646390911527288832.00')->toBe(ConvertDataSize::parser('632 EiB'));
});

it('Parser#Zbit', function () {
    expect('79000000000000000000000.00')->toBe(ConvertDataSize::parser('632 Zbit'));
});

it('Parser#Zibit', function () {
    expect('7673845534663173472256.00')->toBe(ConvertDataSize::parser('52 Zibit'));
});

it('Parser#ZB', function () {
    expect('23000000000000000000000.00')->toBe(ConvertDataSize::parser('23 ZB'));
});

it('Parser#ZiB', function () {
    expect('63751947518740210384896.00')->toBe(ConvertDataSize::parser('54 ZiB'));
});

it('Parser#Ybit', function () {
    expect('1875000000000000000000000.00')->toBe(ConvertDataSize::parser('15 Ybit'));
});

it('Parser#Yibit', function () {
    expect('3777893186295716170956800.00')->toBe(ConvertDataSize::parser('25 Yibit'));
});

it('Parser#YB', function () {
    expect('634000000000000000000000000.00')->toBe(ConvertDataSize::parser('634 YB'));
});

it('Parser#YiB', function () {
    expect('499286363500841849153650688.00')->toBe(ConvertDataSize::parser('413 YiB'));
});
