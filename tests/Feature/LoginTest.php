<?php

namespace Tests\Feature;

use App\Exports\ElementsExport;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Maatwebsite\Excel\Facades\Excel;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('POST', route('login'), [
            'email' => "demo@usuario.com",
            'password' => "pipjY7-guknaq-nancex",
        ]);
        $response->assertStatus(200);
    }

    public function test_login_failed()
    {
        $this->withoutExceptionHandling();
        $response = $this->json('POST', route('login'), [
            'email' => "2demo@usuario.com",
            'password' => "pipjY7-guknaq-nancex",
        ]);
        $response->assertStatus(400);
    }
}
