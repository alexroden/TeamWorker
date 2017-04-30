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

use AltThree\TestBench\AnalysisTrait;
use PHPUnit_Framework_TestCase as TestCase;

class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    protected function getPaths()
    {
        return [
            realpath(__DIR__.'/../app'),
            realpath(__DIR__.'/../bootstrap'),
            realpath(__DIR__.'/../config'),
            realpath(__DIR__.'/../database'),
            realpath(__DIR__),
        ];
    }
}
