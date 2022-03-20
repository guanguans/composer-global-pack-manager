<?php

/**
 * This file is part of the guanguans/composer-global-pack-manager.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Guanguans\ComposerGlobalPackManagerTests;

class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * This method is called after the last test of this test class is run.
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * This method is called before each test.
     */
    public function setUp(): void
    {
        // \DG\BypassFinals::enable();
    }

    /**
     * This method is called after each test.
     */
    public function tearDown(): void
    {
        $this->finish();
        \Mockery::close();
    }

    /**
     * Run extra tear down code.
     */
    protected function finish()
    {
        // call more tear down methods
    }
}
