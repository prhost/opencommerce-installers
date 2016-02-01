<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class OpenCommerceExtensionInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OpenCommerceExtensionInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}