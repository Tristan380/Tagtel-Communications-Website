<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfb53b1fbfb44de8027e3573c52214477
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfb53b1fbfb44de8027e3573c52214477::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfb53b1fbfb44de8027e3573c52214477::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfb53b1fbfb44de8027e3573c52214477::$classMap;

        }, null, ClassLoader::class);
    }
}