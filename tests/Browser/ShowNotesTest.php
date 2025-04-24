<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group ShowNotes
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->Clicklink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'alfangunawan@gmail.com')
                ->type('password', 'anjay')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->clickLink('Notes')
                ->assertPathIs('/notes');
        });
    }
}
