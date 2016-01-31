<?php

namespace Prhost\ComposerInstallers;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class OpenCommerceExtensionInstaller extends LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $prettyName = explode('/', $package->getPrettyName());
        $devName = $prettyName[0];
        $extensionName = $prettyName[1];

//            throw new \InvalidArgumentException('O pacote nao e uma extensao valida.');

        return 'extensions/' . $devName . '/' . $extensionName . '/';
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'opencommerce-extension' === $packageType;
    }
}