<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1cd3f2278f13bf1cf7075ffd7173605e
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aorusx\\Test2\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aorusx\\Test2\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1cd3f2278f13bf1cf7075ffd7173605e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1cd3f2278f13bf1cf7075ffd7173605e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1cd3f2278f13bf1cf7075ffd7173605e::$classMap;

        }, null, ClassLoader::class);
    }
}