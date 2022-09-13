<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit941b32cbd0880f0136220661a65c9e12
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit941b32cbd0880f0136220661a65c9e12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit941b32cbd0880f0136220661a65c9e12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit941b32cbd0880f0136220661a65c9e12::$classMap;

        }, null, ClassLoader::class);
    }
}