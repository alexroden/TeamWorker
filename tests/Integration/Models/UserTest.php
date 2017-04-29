<?php


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