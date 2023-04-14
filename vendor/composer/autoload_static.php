<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95c8ed2e845130c47bc37b5d5a1d29f6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Professional\\PhpException\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Professional\\PhpException\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit95c8ed2e845130c47bc37b5d5a1d29f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95c8ed2e845130c47bc37b5d5a1d29f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95c8ed2e845130c47bc37b5d5a1d29f6::$classMap;

        }, null, ClassLoader::class);
    }
}
