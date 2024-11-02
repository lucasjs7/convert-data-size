<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

it('kbit', function () {
    expect('4320432029250')->toBe(ConvertDataSize::parser('34563456234 kbit'));
});

it('Kibit', function () {
    expect('441758038842414749952')->toBe(ConvertDataSize::parser('3451234678456365234 Kibit'));
});

it('kB', function () {
    expect('2345456724553000')->toBe(ConvertDataSize::parser('2345456724553 kB'));
});

it('KiB', function () {
    expect('78384470540638208')->toBe(ConvertDataSize::parser('76547334512342 KiB'));
});

it('Mbit', function () {
    expect('67667659556625000')->toBe(ConvertDataSize::parser('541341276453 Mbit'));
});

it('Mibit', function () {
    expect('566552512823296')->toBe(ConvertDataSize::parser('4322452643 Mibit'));
});

it('MB', function () {
    expect('178978533467645000000')->toBe(ConvertDataSize::parser('178978533467645 MB'));
});

it('MiB', function () {
    expect('665396166391758848')->toBe(ConvertDataSize::parser('634571234123 MiB'));
});

it('Gbit', function () {
    expect('51543233000000000')->toBe(ConvertDataSize::parser('412345864 Gbit'));
});

it('Gibit', function () {
    expect('46388789536308068352')->toBe(ConvertDataSize::parser('345623415234 Gibit'));
});

it('GB', function () {
    expect('760845678456000000000')->toBe(ConvertDataSize::parser('760845678456 GB'));
});

it('GiB', function () {
    expect('96172085809237721088')->toBe(ConvertDataSize::parser('89567234562 GiB'));
});

it('Tbit', function () {
    expect('6790250000000000')->toBe(ConvertDataSize::parser('54322 Tbit'));
});

it('Tibit', function () {
    expect('133939240121504104448')->toBe(ConvertDataSize::parser('974536234 Tibit'));
});

it('TB', function () {
    expect('1235672342000000000000')->toBe(ConvertDataSize::parser('1235672342 TB'));
});

it('TiB', function () {
    expect('4982143371662327808')->toBe(ConvertDataSize::parser('4531233 TiB'));
});

it('Pbit', function () {
    expect('79176551500000000000000')->toBe(ConvertDataSize::parser('633412412 Pbit'));
});

it('Pibit', function () {
    expect('442104864620079480832')->toBe(ConvertDataSize::parser('3141344 Pibit'));
});

it('PB', function () {
    expect('23456234000000000000000')->toBe(ConvertDataSize::parser('23456234 PB'));
});

it('PiB', function () {
    expect('7356629991309705216')->toBe(ConvertDataSize::parser('6534 PiB'));
});

it('Ebit', function () {
    expect('51625000000000000000')->toBe(ConvertDataSize::parser('413 Ebit'));
});

it('Eibit', function () {
    expect('112842192263395147776')->toBe(ConvertDataSize::parser('783 Eibit'));
});

it('EB', function () {
    expect('234000000000000000000')->toBe(ConvertDataSize::parser('234 EB'));
});

it('EiB', function () {
    expect('728646390911527288832')->toBe(ConvertDataSize::parser('632 EiB'));
});

it('Zbit', function () {
    expect('79000000000000000000000')->toBe(ConvertDataSize::parser('632 Zbit'));
});

it('Zibit', function () {
    expect('7673845534663173472256')->toBe(ConvertDataSize::parser('52 Zibit'));
});

it('ZB', function () {
    expect('23000000000000000000000')->toBe(ConvertDataSize::parser('23 ZB'));
});

it('ZiB', function () {
    expect('63751947518740210384896')->toBe(ConvertDataSize::parser('54 ZiB'));
});

it('Ybit', function () {
    expect('1875000000000000000000000')->toBe(ConvertDataSize::parser('15 Ybit'));
});

it('Yibit', function () {
    expect('3777893186295716170956800')->toBe(ConvertDataSize::parser('25 Yibit'));
});

it('YB', function () {
    expect('634000000000000000000000000')->toBe(ConvertDataSize::parser('634 YB'));
});

it('YiB', function () {
    expect('499286363500841849153650688')->toBe(ConvertDataSize::parser('413 YiB'));
});
