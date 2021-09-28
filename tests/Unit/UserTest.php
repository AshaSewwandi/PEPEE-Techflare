<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
     
     /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Dewmi Nethsara',
            'email' => 'dewmi1998@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Vihanga Theekshana',
            'email' => 'vihanga1998@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }

    public function test_it_stores_new_user()
    {
        $response = $this->post('/register',[
            'name'=>'Vihanga Theekshana',
            'email'=>'vihanga1998@gmail.com',
            'address'=>'Katubedda Moratuwa',
            'moboleNo'=>'0713456789',
            'password'=>'12345678'
            
        ]);

        $response->assertRedirect('/home');
    }
}
