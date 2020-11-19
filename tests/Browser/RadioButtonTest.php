<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class RadioButtonTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('radio_button')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-radio-group:first-child .el-radio-button:nth-child(2)')
                ->click('#submit')
                ->assertSee('"bar_name":"22"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('radio_button')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"22"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-radio-group:first-child .el-radio-button:nth-child(3)');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"23"');
        });
    }
}
