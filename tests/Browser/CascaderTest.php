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

    public function testResourceAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('cascader_resource')
                ->click('.el-cascader:first-child .el-input__inner')
                ->pause(400)
                ->assertSee('水果')
                ->assertSee('蔬菜')
                ->clickAtPoint(40, 70)
                ->pause(400)
                ->assertSee('苹果')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-cascader:first-child .el-input__inner')
                ->pause(400)
                ->clickAtPoint(40, 70)
                ->pause(400)
                ->clickAtPoint(240, 70)
                ->click('#submit')
                ->assertSee('"bar_name":"1,11"');
        });
    }

    public function testResourceEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('cascader_resource')
                ->pause(400)
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"2,21"')
                ->back()
                ->with('@second-form', function (Browser $browser) {
                    $browser->click('.el-cascader:first-child .el-input__inner');
                })
                ->pause(400)
                ->clickAtPoint(40, 150)
                ->pause(400)
                ->clickAtPoint(240, 150)
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"1,11"');
        });
    }
}
