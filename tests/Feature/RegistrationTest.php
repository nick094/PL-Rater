<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    /** @test **/
    public function user_will_be_redirected_to_waiting_for_approval_page_after_registering()
    {

        $this->post('/register', [
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertRedirect('/approval');
    }


    /** @test **/
    public function confirmation_email_is_sent_upon_registration()
    {
    	Mail::fake();

        $this->post('/register', [
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        Mail::assertSent(SendCustomEmail::class);
    }

}
