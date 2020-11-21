<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class SwitcherTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('switcher')
                ->click('#submit')
                ->assertSee('"bar_name":"false"')
                ->back()
                ->click('.el-switch:first-child')
                ->click('#submit')
                ->assertSee('"bar_name":"true"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('switcher')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"true"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-switch');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"false"');
        });
    }
}
