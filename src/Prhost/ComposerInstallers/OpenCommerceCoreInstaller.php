<?php

namespace Prhost\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class OpenCommerceCoreInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'core/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'OpenCommerce-core' === $packageType;
    }
}