<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc8cfe983fea1305093140547ee635e66
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc8cfe983fea1305093140547ee635e66::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc8cfe983fea1305093140547ee635e66::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
