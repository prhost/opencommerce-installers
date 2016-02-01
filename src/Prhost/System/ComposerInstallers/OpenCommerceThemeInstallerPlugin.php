<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class OpenCommerceThemeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OpenCommerceThemeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}