<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28a8089e3e97ed0fbf3c7d26e204e4a8
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monique\\SimpleFactory\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monique\\SimpleFactory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit28a8089e3e97ed0fbf3c7d26e204e4a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28a8089e3e97ed0fbf3c7d26e204e4a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28a8089e3e97ed0fbf3c7d26e204e4a8::$classMap;

        }, null, ClassLoader::class);
    }
}
