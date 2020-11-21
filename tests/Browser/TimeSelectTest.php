<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class TimeSelectTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('time_select')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-date-editor:first-child .el-input__inner')
                ->keys('.el-date-editor:first-child .el-input__inner', '{down}', '{enter}')
                ->click('#submit')
                ->assertSee('"bar_name":"09:00"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('time_select')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"09:30"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-date-editor:first-child .el-input__inner')
                        ->keys('.el-date-editor:first-child .el-input__inner', '{down}', '{enter}');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"10:00"');
        });
    }
}
