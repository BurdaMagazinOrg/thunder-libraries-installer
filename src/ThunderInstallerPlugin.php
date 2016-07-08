<?php

namespace Thunder\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class ThunderInstallerPlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new ThunderLibraryInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}
