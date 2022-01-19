<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit38983670259259aadc33e9c4c59f60af
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SOLID\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SOLID\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Principles',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit38983670259259aadc33e9c4c59f60af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit38983670259259aadc33e9c4c59f60af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit38983670259259aadc33e9c4c59f60af::$classMap;

        }, null, ClassLoader::class);
    }
}
