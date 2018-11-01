<?php

namespace Tests\Unit;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = User::find(51);
        DB::table('users')->where('id', '>', 50)->delete();
        $user = User::all();
        $this->assertDatabaseMissing('users', ['id' => '51']);
    }
}
