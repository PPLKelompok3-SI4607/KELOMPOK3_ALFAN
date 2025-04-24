<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group DeleteNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->Clicklink('Log in') //klik link log in
                ->assertPathIs('/login') //pastikan sudah di route login
                ->type('email', 'alfangunawan@gmail.com') //masukkan nilai email
                ->type('password', 'anjay') //masukkan nilai password
                ->press('LOG IN') //klik tombol LOG IN
                ->assertPathIs('/dashboard') //pastikan sudah di route dashboard
                ->clickLink('Notes') //klik link Notes
                ->assertPathIs('/notes') //pastikan sudah di route /notes
                ->Click('#delete-1') //klik elemen delete-1
                ->assertPathIs('/notes'); //pastikan sudah di route /notes
        });
    }
}
