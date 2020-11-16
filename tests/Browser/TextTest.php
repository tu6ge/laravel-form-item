<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class TextTest extends BrowserTestCase
{
    public function testIndex()
    {
        //$this->registerTestRoute('text');

        $this->browse(function (Browser $browser) {
            $browser->visit('text')
                ->click('#submit')
                ->assertSee('"bar_name":"aaa"');
        });
    }
}
