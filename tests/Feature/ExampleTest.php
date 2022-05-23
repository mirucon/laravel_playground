<?php

namespace Tests\Feature;

use App\Models\AnotherUser;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_auth_user_returns_non_default()
    {
        $this->actingAs(new User(), 'user');
        var_dump(get_class(auth()->user()));
        $this->assertTrue(auth()->user() instanceof User);

        $this->actingAs(new AnotherUser(), 'another_user');
        var_dump(get_class(auth()->user()));
        $this->assertTrue(auth()->user() instanceof AnotherUser);
    }
}
