<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit059226ef6d7561612e16a43bd6a3e016
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit059226ef6d7561612e16a43bd6a3e016::$classMap;

        }, null, ClassLoader::class);
    }
}
