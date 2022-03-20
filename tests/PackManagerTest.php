<?php

/**
 * This file is part of the guanguans/composer-global-pack-manager.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\ComposerGlobalPackManagerTests;

use Composer\Plugin\PluginInterface;
use Guanguans\ComposerGlobalPackManager\PackManager;
use Mockery;

final class PackManagerTest extends TestCase
{
    public function testInstanceOf()
    {
        $this->assertInstanceOf(PluginInterface::class, Mockery::mock(PackManager::class));
    }
}
