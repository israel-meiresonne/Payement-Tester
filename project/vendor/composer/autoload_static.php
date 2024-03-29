<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49c684089e7e2e27e26dfc349a75ed32
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49c684089e7e2e27e26dfc349a75ed32::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49c684089e7e2e27e26dfc349a75ed32::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49c684089e7e2e27e26dfc349a75ed32::$classMap;

        }, null, ClassLoader::class);
    }
}
