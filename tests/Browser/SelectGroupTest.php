<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class SelectGroupTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('select_group')
                ->click('#submit')
                ->assertSee('"bar_name":null') // todo 无法默认选中第一个值
                ->back()
                ->click('.el-select:first-child .el-input__inner')
                ->keys('.el-select:first-child .el-input__inner', '{down}', '{down}', '{enter}')
                ->click('#submit')
                ->assertSee('"bar_name":"23"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('select_group')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"23"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-select:first-child .el-input__inner')
                        ->keys('.el-select:first-child .el-input__inner', '{down}', '{down}', '{down}', '{enter}');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"21"');
        });
    }
}
