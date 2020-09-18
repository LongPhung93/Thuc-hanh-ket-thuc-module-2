<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22f5aa0eeeb09cc2e4068353ed797055
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyHome\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyHome\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22f5aa0eeeb09cc2e4068353ed797055::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22f5aa0eeeb09cc2e4068353ed797055::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
