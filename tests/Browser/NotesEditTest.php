<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group NotesEdit
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
                ->assertPathIs('/notes')
                ->click('@edit-1')
                ->assertPathIs('/edit-note-page/1')
                ->type('title', 'note2')
                ->type('description', 'note ini testing pertama setelah diedit')
                ->press('UPDATE')
                ->assertPathIs('/notes');
        });
    }
}
