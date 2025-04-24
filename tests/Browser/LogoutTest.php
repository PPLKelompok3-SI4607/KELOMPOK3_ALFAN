<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group Logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->Clicklink('Log in') //klik tautan log in
                ->assertPathIs('/login') // pastikan sudah di route login
                ->type('email', 'alfangunawan@gmail.com') //memasukkan email
                ->type('password', 'anjay') //memasukkan password
                ->press('LOG IN') //klik tombol LOG IN
                ->assertPathIs('/dashboard') //memastikan sudah di route dashboard
                ->waitFor('#click-dropdown', 5) //mencari elemen click-dropdown
                ->clickLink('Log Out') //klik log out
                ->assertPathIs('/'); //pastikan di route default awal yaitu /
        });
    }
}
