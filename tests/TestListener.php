<?php

/*
 * This file is part of TeamWorker.
 *
 * (c) Alex Roden <b.r_alex@hotmail.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ABR\Tests\TeamWorker;

use PHPUnit_Framework_BaseTestListener;
use PHPUnit_Framework_TestSuite;

/**
 * This is the test listener class.
 *
 * @author Alex Broom-Roden
 */
class TestListener extends PHPUnit_Framework_BaseTestListener
{
    /**
     * A test suite ended.
     *
     * @param \PHPUnit_Framework_TestSuite $suite
     *
     * @return void
     */
    public function endTestSuite(PHPUnit_Framework_TestSuite $suite)
    {
        if ($suite->getName() !== 'TeamWorker Test Suite') {
            return;
        }
        foreach (glob(__DIR__.'/../bootstrap/cache/*.php', GLOB_BRACE) as $file) {
            unlink($file);
        }
    }
}
