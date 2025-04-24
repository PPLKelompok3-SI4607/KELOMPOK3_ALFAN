<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {

            $browser->visit('/')
                ->Clicklink('Register')
                ->assertPathIs('/register')
                ->type('name', 'alfan gunawan')
                ->type('email', 'alfangunawan@gmail.com')
                ->type('password', 'anjay')
                ->type('password_confirmation', 'anjay')
                ->press('REGISTER')
                ->assertPathIs('/dashboard');
        });
    }
}
