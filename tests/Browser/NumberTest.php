<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class NumberTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('number')
                ->click('#submit')
                ->assertSee('"bar_name":"0"')
                ->back()
                ->click('.el-input-number__increase')
                ->click('.el-input-number__increase')
                ->click('#submit')
                ->assertSee('"bar_name":"2"')
                ->back()
                ->click('.el-input-number__decrease')
                ->click('#submit')
                ->assertSee('"bar_name":"-1"')
            ;
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('number')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"3"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-input-number__increase');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"4"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-input-number__decrease');
                    $table->click('.el-input-number__decrease');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"1"');
        });
    }
}
