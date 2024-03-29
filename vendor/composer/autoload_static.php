<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb707bb9373ae9dc4659fafd9d01530e0
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fawno\\wget\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fawno\\wget\\' => 
        array (
            0 => __DIR__ . '/..' . '/fawno/wget/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb707bb9373ae9dc4659fafd9d01530e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb707bb9373ae9dc4659fafd9d01530e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb707bb9373ae9dc4659fafd9d01530e0::$classMap;

        }, null, ClassLoader::class);
    }
}
