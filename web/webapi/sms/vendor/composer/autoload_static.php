<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf7ea73a33a54f08321caba2962ff343f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf7ea73a33a54f08321caba2962ff343f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf7ea73a33a54f08321caba2962ff343f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}