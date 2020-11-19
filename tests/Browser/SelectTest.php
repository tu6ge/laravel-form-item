<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class SelectTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('select')
                ->click('#submit')
                ->assertSee('"bar_name":null') // todo 无法默认选中第一个值
                ->back()
                ->click('.el-select:first-child .el-input__inner')
                ->keys('.el-select:first-child .el-input__inner', '{down}', '{down}', '{enter}')
                ->click('#submit')
                ->assertSee('"bar_name":"22"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('select')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"22"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-select:first-child .el-input__inner')
                        ->keys('.el-select:first-child .el-input__inner', '{down}', '{enter}');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"11"');
        });
    }
}
