<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cc6e3d37b5c0ea3e50a2051003792c0
{
    public static $files = array (
        'e3beed4731da89c2f2c570aad27339ae' => __DIR__ . '/../..' . '/src/qp_functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'Q' => 
        array (
            'QueryPath' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cc6e3d37b5c0ea3e50a2051003792c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cc6e3d37b5c0ea3e50a2051003792c0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0cc6e3d37b5c0ea3e50a2051003792c0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}