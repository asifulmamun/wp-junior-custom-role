<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1be6fb61ea92debb95f99bfb1e7671b3
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Backend\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Backend',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1be6fb61ea92debb95f99bfb1e7671b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1be6fb61ea92debb95f99bfb1e7671b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1be6fb61ea92debb95f99bfb1e7671b3::$classMap;

        }, null, ClassLoader::class);
    }
}
