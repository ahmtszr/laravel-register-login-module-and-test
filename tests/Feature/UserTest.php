<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    //Kullanacağımız libraryleri belirttik.
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    //Kullanıcı register sayfasını ziyaret edebilir
    public function test_user_can_visit_register_page()
    {
        $response =$this->get('/register');
        $response->assertStatus(200);
    }

    //Kullanıcı null değerlerle register olamaz
    public function test_user_cant_register_with_null_values()
    {
        $response =$this->post('/register',[
            'email'=>null,
            'username'=>null,
            'password'=>null,
            'password_confirmation'=>null
        ]);
        $response->assertInvalid(['email','username','password','password_confirmation']);
    }

    //Kullanıcı geçersiz değerlerle register olamaz
    public function test_user_cant_register_with_invalid_values()
    {
        $response=$this->post('/register',[
            'email'=>12345678,
            'username'=>null,
            'password'=>true,
            'password_confirmation'=>true,
        ]);
        $response->assertInvalid(['email','username','password','password_confirmation']);
    }

    //Kullanıcı geçerli değerlerle kayıt olabilir.
    public function test_user_can_register_with_valid_values()
    {
        echo $this->faker->email();
        //Password ve confirmation için faker iki farklı şifre oluşturmasın diye bir şifre oluşturduk ve tek değişkene atadık.
        //Bu değişkeni password ve password_confirmationda kullandık.
        $sifre =$this->faker->password(minLength: 8);
        echo $sifre;
        $response=$this->post('/register',[
            'email'=>$this->faker->email(),
            'username'=>$this->faker->words(1,true),
            'password'=>$sifre,
            'password_confirmation'=>$sifre
        ]);
        $response->assertValid();
    }

    //Kullanıcı register olduktan sonra anasayfaya yönlenir.
    public function test_user_after_register_it_goes_to_the_homepage()
    {
        $response=$this->post('/register');
        $response->assertRedirect('/');
    }

    //Kullanıcı login sayfasını ziyaret edebilir.
    public function test_user_can_visit_login_page()
    {
        $response =$this->get('/login');
        $response->assertStatus(200);
    }

    //Kullanıcı çıkış yaptıktan sonra login sayfasına yönlenir.
    public function test_user_can_logout()
    {
        $response=$this->get('/logout');
        $response->assertRedirect('/login');
    }



}
