<?php

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