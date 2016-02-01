<?php

namespace Prhost\System\ComposerInstallers;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class OpenCommerceCoreInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new OpenCommerceCoreInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}