<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit86c9766b2378d63a95f673bfcd572117
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit86c9766b2378d63a95f673bfcd572117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit86c9766b2378d63a95f673bfcd572117::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
