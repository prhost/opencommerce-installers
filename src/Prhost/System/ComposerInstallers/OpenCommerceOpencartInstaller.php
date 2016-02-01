<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class OpenCommerceOpencartInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'opencart/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'opencommerce-opencart' === $packageType;
    }
}