<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c551f4828a90301697fec4812f309d7
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        'de46741d900ccc60cdf68ac0aa43dbd2' => __DIR__ . '/../..' . '/Core/fonctions/fonctions.php',
        'e2b372fb4a87dbe5414550bf77ff8963' => __DIR__ . '/../..' . '/Controller/userController.php',
        'e6c8a0f06b7999a4a4e321d09853e151' => __DIR__ . '/../..' . '/Controller/postController.php',
        '293ead72c24785132d3f1ff63a092aa9' => __DIR__ . '/../..' . '/Controller/commentController.php',
        'fe0ac6da616a0123fd912aa96025e214' => __DIR__ . '/../..' . '/Controller/chatController.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'G' => 
        array (
            'Gschool\\Model\\' => 14,
            'Gschool\\Core\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Gschool\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Model',
        ),
        'Gschool\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c551f4828a90301697fec4812f309d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c551f4828a90301697fec4812f309d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c551f4828a90301697fec4812f309d7::$classMap;

        }, null, ClassLoader::class);
    }
}
