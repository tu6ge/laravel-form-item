<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class CheckboxButtonTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('checkbox_button')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-checkbox-group:first-child .el-checkbox-button:nth-child(1)')
                ->click('.el-checkbox-group:first-child .el-checkbox-button:nth-child(2)')
                ->click('#submit')
                ->assertSee('"bar_name":"11,22"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('checkbox_button')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"22"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-checkbox-group:first-child .el-checkbox-button:nth-child(2)');
                    $table->click('.el-checkbox-group:first-child .el-checkbox-button:nth-child(3)');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"23"')
                ->back()
                ->refresh()   // todo 提交表单返回页面，不能正确渲染
                ->with('@second-form', function ($table) {
                    $table->click('.el-checkbox-group .el-checkbox-button:nth-child(2)');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":null');
        });
    }
}
