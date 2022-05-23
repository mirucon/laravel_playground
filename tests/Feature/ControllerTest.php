<?php

namespace Tests\Feature;

use App\Models\AnotherUser;
use App\Models\User;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_form_request_user_returns_non_default()
    {
        $this->actingAs(new User(), 'user');
        $this->postJson(route('test'));

        $this->actingAs(new AnotherUser(), 'another_user');
        $this->postJson(route('test'));
    }
}
