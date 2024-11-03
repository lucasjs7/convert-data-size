Convert Data Size for PHP
===

This is a simple and lightweight library that aims to convert computational data using PHP language.

Available functions
===

- [Parser](#parser)
	- [Function](#parser-function)
	- [Parameters](#parser-parameters)
	- [Examples](#parser-examples)
- [Unit](#unit)
	- [Function](#unit-function)
	- [Parameters](#unit-parameters)
	- [Examples](#unit-examples)

# Parser

With this function you can pass the quantity and the measurement in the same string and define the output measurement. If the input or output measurement is not in the list of [supported measurements](#supported-measures), the return will be false.

### Function <a id='parser-function'></a>

```php
class ConvertDataSize {

	public static function parser(string $value, string $toSize = 'B', ?int $scale = 2): string|false;

}
```

### Parameters <a id='parser-parameters'></a>

- **value**: The string containing the quantity with the computational unit

- **toSize**: The measure of result

- **scale**: Sets the number of digits after the decimal place of the result

### Examples <a id='parser-examples'></a>

```php
<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

# Input in YiB
echo ConvertDataSize::parser('110 YiB');
# Output in B: 132981840157609209217679360.00

```

```php
<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

# Input in MB
echo ConvertDataSize::parser('42 MB', 'GB');
# Output in GB: 0.04

```


# Unit

With this function you can separately pass the input quantity, the input measurement and the output measurement. If the input or output measurement is not in the list of [supported measurements](#supported-measures), the return will be false.

### Function <a id='unit-function'></a>

```php
class ConvertDataSize {

	public static function unit(string $value, string $fromSize = 'B', string $toSize = 'B', ?int $scale = 2): string|false;

}
```

### Parameters <a id='unit-parameters'></a>

- **value**: The quantity

- **fromSize**: The input measurement

- **toSize**: The measure of result

- **scale**: Sets the number of digits after the decimal place of the result

### Examples <a id='unit-examples'></a>

```php
<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

# Input in B
echo ConvertDataSize::unit('675823423', 'B', 'Kibit');
# Output in Kibit: 5279870.49

```
```php
<?php

use Lucasjs7\ConvertDataSize\ConvertDataSize;

# Input in ZiB
echo ConvertDataSize::unit('147.86', 'ZiB', 'TB');
# Output in TB: 174562277039.27

```

# Supported measures

```

    Byte (B)

    Kilobit (kbit)
    Kibibit (Kibit)
    Kilobyte (kB)
    Kibibyte (KiB)

    Megabit (Mbit)
    Mebibit (Mibit)
    Megabyte (MB)
    Mebibyte (MiB)

    Gigabit (Gbit)
    Gibibit (Gibit)
    Gigabyte (GB)
    Gibibyte (GiB)

    Terabit (Tbit)
    Tebibit (Tibit)
    Terabyte (TB)
    Tebibyte (TiB)

    Petabit (Pbit)
    Pebibit (Pibit)
    Petabyte (PB)
    Pebibyte (PiB)

    Exabit (Ebit)
    Exbibit (Eibit)
    Exabyte (EB)
    Exbibyte (EiB)

    Zettabit (Zbit)
    Zebibit (Zibit)
    Zettabyte (ZB)
    Zebibyte (ZiB)

    Yottabit (Ybit)
    Yobibit (Yibit)
    Yottabyte (YB)
    Yobibyte (YiB)

```