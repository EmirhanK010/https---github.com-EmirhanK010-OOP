<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97bfd0b74906a01b99b3114c36a282c7
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Threeonarow\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Threeonarow\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97bfd0b74906a01b99b3114c36a282c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97bfd0b74906a01b99b3114c36a282c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit97bfd0b74906a01b99b3114c36a282c7::$classMap;

        }, null, ClassLoader::class);
    }
}
