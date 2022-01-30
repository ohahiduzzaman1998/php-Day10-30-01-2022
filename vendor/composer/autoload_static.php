<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44b17c68a60347fb297d46e601ee744e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44b17c68a60347fb297d46e601ee744e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44b17c68a60347fb297d46e601ee744e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit44b17c68a60347fb297d46e601ee744e::$classMap;

        }, null, ClassLoader::class);
    }
}
