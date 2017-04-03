<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0767063ca1feb012d770a340dac04783
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'A' => 
        array (
            'Aicial\\Webrequest\\' => 18,
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Aicial\\Webrequest\\' => 
        array (
            0 => __DIR__ . '/..' . '/aicial/webrequest/src',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0767063ca1feb012d770a340dac04783::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0767063ca1feb012d770a340dac04783::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
