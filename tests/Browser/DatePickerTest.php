<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class DatePickerTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('date_picker')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->click('.el-date-editor:first-child .el-input__inner')
                ->keys('.el-date-editor:first-child .el-input__inner', '2020-10-23')
                ->click('#submit')
                ->assertSee('"bar_name":"2020-10-23"');
        });
    }

//    public function testEdit()
//    {
//        $this->browse(function (Browser $browser) {
//            $browser->visit('date_picker')
//                ->storeSource(__DIR__.'/aaa')
//                ->assertSee('aaaaaaaaaaa')
//                ->click('#submit-edit')
//                ->assertSee('"bar_name_edit":"2020-11-21"')
//                ->back()
//                ->with('@second-form', function ($table) {
//                    $table->click('.el-date-editor .el-input__inner')
//                        ->keys('.el-date-editor .el-input__inner', '2020-10-24');
//                })
//                ->click('#submit-edit')
//                ->assertSee('"bar_name_edit":"2020-10-24"');
//        });
//    }
}
