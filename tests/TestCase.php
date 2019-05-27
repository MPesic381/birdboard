<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Sign a new user in for testing
     *
     * @param null $user
     */
    protected function signIn($user = null)
    {
        $this->actingAs($user ?: factory('App\User')->create());
    }
}
