<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Carbon\Carbon;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testAccessToppage()
    {
        $now = Carbon::now();

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->screenshot($now.'toppage');
        });
    }

    public function testAccessBlogpage()
    {
        $now = Carbon::now();

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Blog')
                    ->screenshot($now.'blog');
        });
    }
}
