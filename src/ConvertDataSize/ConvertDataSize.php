<?php

namespace Lucasjs7\ConvertDataSize;

class ConvertDataSize {

    public static function string(
        string $value,
        int    $base = 2,
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

        $exp = static::exp(
            size: $fSize,
            base: $base,
        );

        if ($exp === false) {
            return false;
        }

        return ($fValue * pow($base, $exp));
    }

    public static function exp(
        string $size,
        int    $base,
    ): int|false {
        return  match ($base) {
            2 => match ($size) {
                'B'   => 0,
                'KiB' => 10,
                'MiB' => 20,
                'GiB' => 30,
                'TiB' => 40,
                'PiB' => 50,
                'EiB' => 60,
                'ZiB' => 70,
                'YiB' => 80,
                default => false,
            },
            10 => match ($size) {
                'B'  => 0,
                'kB' => 3,
                'MB' => 6,
                'GB' => 9,
                'TB' => 12,
                'PB' => 15,
                'EB' => 18,
                'ZB' => 21,
                'YB' => 24,
                default => false,
            },
            default => false,
        };
    }

    public static function dataBit(): int|false {
    }
}
