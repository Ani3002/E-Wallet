<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31efd87c2e653c3a8bac520ad5878ff4
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PragmaRX\\Google2FA\\' => 19,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
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
        'PragmaRX\\Google2FA\\' => 
        array (
            0 => __DIR__ . '/..' . '/pragmarx/google2fa/src',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31efd87c2e653c3a8bac520ad5878ff4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31efd87c2e653c3a8bac520ad5878ff4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31efd87c2e653c3a8bac520ad5878ff4::$classMap;

        }, null, ClassLoader::class);
    }
}
