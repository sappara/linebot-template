<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49cc18cb7639106b644a9aed8ca3ec71
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49cc18cb7639106b644a9aed8ca3ec71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49cc18cb7639106b644a9aed8ca3ec71::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
