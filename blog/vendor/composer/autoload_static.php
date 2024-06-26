<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11e1b7d1afeb1c5819390248698786c5
{
    public static $files = array (
        'b3ea3f5d47d022ec3c9b69ef2f82d2c4' => __DIR__ . '/../..' . '/sistema/configuracao.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'sistema\\' => 8,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'sistema\\' => 
        array (
            0 => __DIR__ . '/../..' . '/sistema',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11e1b7d1afeb1c5819390248698786c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11e1b7d1afeb1c5819390248698786c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11e1b7d1afeb1c5819390248698786c5::$classMap;

        }, null, ClassLoader::class);
    }
}
