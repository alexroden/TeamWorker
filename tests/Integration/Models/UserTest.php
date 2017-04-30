<?php

/*
 * This file is part of TeamWorker.
 *
 * (c) Alex Roden <b.r_alex@hotmail.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ABR\Tests\TeamWorker\Models;

use ABR\TeamWorker\Models\User;
use ABR\Tests\TeamWorker\AbstractTestCase;
use AltThree\TestBench\ValidationTrait;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends AbstractTestCase
{
    use ValidationTrait, DatabaseMigrations;

    public function tesValidation()
    {
        $this->checkRules(new User());
    }
}
