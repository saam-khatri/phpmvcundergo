<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfcad32c637c62cbee7610f67f267023
{
    public static $files = array (
        'e75ac3d0f8db370fa8f34690b303fb3c' => __DIR__ . '/../..' . '/system/help/help.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Application\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Application\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Application\\app\\controllers\\MainController' => __DIR__ . '/../..' . '/app/controllers/MainController.php',
        'Application\\app\\controllers\\frontend\\ApplicationController' => __DIR__ . '/../..' . '/app/controllers/frontend/ApplicationController.php',
        'Application\\system\\App' => __DIR__ . '/../..' . '/system/App.php',
        'Application\\system\\Config' => __DIR__ . '/../..' . '/system/Config.php',
        'Application\\system\\Route' => __DIR__ . '/../..' . '/system/Route.php',
        'Application\\system\\Server' => __DIR__ . '/../..' . '/system/Server.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfcad32c637c62cbee7610f67f267023::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfcad32c637c62cbee7610f67f267023::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfcad32c637c62cbee7610f67f267023::$classMap;

        }, null, ClassLoader::class);
    }
}