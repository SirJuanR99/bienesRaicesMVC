<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbd916cac86311d47ba55a918d3fcd21f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
            'Intervention\\Gif\\' => 17,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src',
        ),
        'Intervention\\Gif\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/gif/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbd916cac86311d47ba55a918d3fcd21f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbd916cac86311d47ba55a918d3fcd21f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbd916cac86311d47ba55a918d3fcd21f::$classMap;

        }, null, ClassLoader::class);
    }
}