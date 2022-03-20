<?php

/**
 * This file is part of the guanguans/composer-global-pack-manager.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\ComposerGlobalPackManager;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class PackManager implements PluginInterface, Capable, CommandProvider
{
    public function getCapabilities()
    {
        // TODO: Implement getCapabilities() method.
    }

    public function getCommands()
    {
        // TODO: Implement getCommands() method.
    }

    public function activate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement activate() method.
    }

    public function deactivate(Composer $composer, IOInterface $io)
    {
        // TODO: Implement deactivate() method.
    }

    public function uninstall(Composer $composer, IOInterface $io)
    {
        // TODO: Implement uninstall() method.
    }
}
