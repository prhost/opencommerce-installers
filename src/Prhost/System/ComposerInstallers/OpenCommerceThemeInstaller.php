<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class OpenCommerceThemeInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prettyName = explode('/', $package->getPrettyName());
        $devName = $prettyName[0];
        $themeName = $prettyName[1];

        return 'theme/' . $devName . '/' . $themeName . '/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'opencommerce-theme' === $packageType;
    }
}