<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf25bdc5b7f5ad82984586e0783bc6188
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        'f598d06aa772fa33d905e87be6398fb1' => __DIR__ . '/..' . '/symfony/polyfill-intl-idn/bootstrap.php',
        'a9ed0d27b5a698798a89181429f162c5' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Common/customFunctions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Settings\\' => 20,
            'chillerlan\\QRCode\\' => 18,
        ),
        'Z' => 
        array (
            'Zxing\\' => 6,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Intl\\Idn\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\PropertyAccess\\' => 33,
            'Symfony\\Component\\OptionsResolver\\' => 34,
            'Symfony\\Component\\Mime\\' => 23,
            'Symfony\\Component\\Inflector\\' => 28,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
            'Endroid\\Installer\\' => 18,
        ),
        'D' => 
        array (
            'DASPRiD\\Enum\\' => 13,
        ),
        'B' => 
        array (
            'BaconQrCode\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Settings\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-settings-container/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
        'Zxing\\' => 
        array (
            0 => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Intl\\Idn\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-intl-idn',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\PropertyAccess\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/property-access',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Symfony\\Component\\Mime\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/mime',
        ),
        'Symfony\\Component\\Inflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/inflector',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
        'Endroid\\Installer\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/installer/src',
        ),
        'DASPRiD\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/dasprid/enum/src',
        ),
        'BaconQrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
        ),
    );

    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
        'FPDF_TPL' => __DIR__ . '/..' . '/setasign/fpdi/fpdf_tpl.php',
        'FPDI' => __DIR__ . '/..' . '/setasign/fpdi/fpdi.php',
        'FilterASCII85' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCII85.php',
        'FilterASCIIHexDecode' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterASCIIHexDecode.php',
        'FilterLZW' => __DIR__ . '/..' . '/setasign/fpdi/filters/FilterLZW.php',
        'fpdi_pdf_parser' => __DIR__ . '/..' . '/setasign/fpdi/fpdi_pdf_parser.php',
        'pdf_context' => __DIR__ . '/..' . '/setasign/fpdi/pdf_context.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf25bdc5b7f5ad82984586e0783bc6188::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf25bdc5b7f5ad82984586e0783bc6188::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf25bdc5b7f5ad82984586e0783bc6188::$classMap;

        }, null, ClassLoader::class);
    }
}
