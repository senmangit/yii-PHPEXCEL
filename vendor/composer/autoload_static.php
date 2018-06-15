<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac36f851c46b08ff57671efc2a65028e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Word\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'PhpOffice\\PhpSpreadsheet\\' => 25,
        ),
        'E' => 
        array (
            'Excel\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Word\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Word',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'PhpOffice\\PhpSpreadsheet\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpspreadsheet/src/PhpSpreadsheet',
        ),
        'Excel\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Excel',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac36f851c46b08ff57671efc2a65028e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac36f851c46b08ff57671efc2a65028e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
