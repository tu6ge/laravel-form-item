<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class CascaderTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('cascader')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-cascader:first-child .el-input__inner')
                ->keys('.el-cascader:first-child .el-input__inner', '{down}', '{right}', '{right}', '{enter}')
                ->click('#submit')
                ->assertSee('"bar_name":"1,11,1101"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('cascader')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"1,11,1101"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-cascader .el-input__inner')
                        ->keys('.el-cascader .el-input__inner', '{down}', '{right}', '{down}', '{enter}');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"1,12"');
        });
    }
}
