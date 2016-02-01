<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class OpenCommerceOpencartInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OpenCommerceOpencartInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}