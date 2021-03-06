<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit727b961ec101d404d9ead0319207d6c3
{
    public static $files = array (
        'cc8df000e1d9d0b6aae0f554880abd9d' => __DIR__ . '/../..' . '/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SSYT\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SSYT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'SSYT\\Auth\\AuthController' => __DIR__ . '/../..' . '/src/Auth/AuthController.php',
        'SSYT\\Models\\PlayerList' => __DIR__ . '/../..' . '/src/Models/PlayerList.php',
        'SSYT\\Models\\User' => __DIR__ . '/../..' . '/src/Models/User.php',
        'SSYT\\Support\\Database' => __DIR__ . '/../..' . '/src/Support/Database.php',
        'SSYT\\Support\\PageContent' => __DIR__ . '/../..' . '/src/Support/PageContent.php',
        'SSYT\\Support\\PageSubmit' => __DIR__ . '/../..' . '/src/Support/PageSubmit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit727b961ec101d404d9ead0319207d6c3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit727b961ec101d404d9ead0319207d6c3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit727b961ec101d404d9ead0319207d6c3::$classMap;

        }, null, ClassLoader::class);
    }
}
