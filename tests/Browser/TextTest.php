<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class TextTest extends BrowserTestCase
{
    public function testIndex()
    {
        $this->registerTestRoute('test');

        $this->browse(function (Browser $browser) {
            $browser->visit('test')
                ->assertSee('bar_name');
        });
    }
}