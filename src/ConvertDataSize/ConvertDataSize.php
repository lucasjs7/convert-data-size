<?php

namespace Lucasjs7\ConvertDataSize;

use Exception;

class ConvertDataSize {

    public static function parser(
        string $value,
        string $toSize = 'B',
        ?int   $scale = 2,
    ): string|false {

        preg_match('/^(\d+(\.\d+)?)\s*(\D+)$/', $value, $matches);

        if (empty($matches)) {
            return false;
        }

        $fValue = $matches[1];
        $fFromSize = $matches[2];

        if (count($matches) === 4) {
            $fFromSize = $matches[3];
        }

        return static::unit(
            value: $fValue,
            fromSize: $fFromSize,
            toSize: $toSize,
            scale: $scale,
        );
    }

    public static function unit(
        string $value,
        string $fromSize = 'B',
        string $toSize = 'B',
        ?int   $scale = 2,
    ): string|false {

        try {

            $fromBytes = static::dataBytes(size: $fromSize);

            if ($fromBytes === false) {
                return false;
            }

            $total = bcmul($value, $fromBytes, $scale);

            if ($toSize !== 'B') {

                $toBytes = static::dataBytes(size: $toSize);

                if ($toBytes === false) {
                    return false;
                }

                $total = bcdiv($total, $toBytes, $scale);
            }

            return $total;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function dataBytes(
        string $size
    ): string|false {
        return match ($size) {
            'B'     => '1',
            'kbit'  => '125',
            'Kibit' => '128',
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
