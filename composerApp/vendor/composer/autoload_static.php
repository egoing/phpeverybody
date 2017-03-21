<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite433a4609d40a54b1202a86b4631a7b5
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
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite433a4609d40a54b1202a86b4631a7b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite433a4609d40a54b1202a86b4631a7b5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
