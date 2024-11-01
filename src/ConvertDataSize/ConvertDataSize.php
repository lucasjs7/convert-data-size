<?php

namespace Lucasjs7\ConvertDataSize;

class ConvertDataSize {

    public static function string(
        string $value,
    ) {

        preg_match('/^(\d+)\s*(\D+)$/', $value, $matches);

        if (empty($matches)) {
            return false;
        }

        $fValue = filter_var($matches[1], FILTER_VALIDATE_INT);
        $fSize  = $matches[2];

        if ($fValue === false) {
            return false;
        }

        $bytes = static::dataBytes(
            size: $fSize,
        );

        if ($bytes === false) {
            return false;
        }

        return bcmul($fValue, $bytes);
    }

    public static function dataBytes(
        string $size
    ): string|false {
        return match ($size) {
            'B'     => '1',
            'kbit'  => '125',
            'Kbit'  => '128',
            'kB'    => '1000',
            'KiB'   => '1024',
            'Mbit'  => '125000',
            'Mibit' => '131072',
            'MB'    => '1000000',
            'MiB'   => '1048576',
            'Gbit'  => '125000000',
            'Gibit' => '134217728',
            'GB'    => '1000000000',
            'GiB'   => '1073741824',
            'Tbit'  => '125000000000',
            'Tibit' => '137438953472',
            'TB'    => '1000000000000',
            'TiB'   => '1099511627776',
            'Pbit'  => '125000000000000',
            'Pibit' => '140737488355328',
            'PB'    => '1000000000000000',
            'PiB'   => '1125899906842624',
            'Ebit'  => '125000000000000000',
            'Eibit' => '144115188075855872',
            'EB'    => '1000000000000000000',
            'EiB'   => '1152921504606846976',
            'Zbit'  => '125000000000000000000',
            'Zibit' => '147573952589676412928',
            'ZB'    => '1000000000000000000000',
            'ZiB'   => '1180591620717411303424',
            'Ybit'  => '125000000000000000000000',
            'Yibit' => '151115727451828646838272',
            'YB'    => '1000000000000000000000000',
            'YiB'   => '1208925819614629174706176',
            default => false,
        };
    }
}
