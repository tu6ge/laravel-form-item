<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class TimeRangeTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('time_range')
                ->click('#submit')
                ->assertDontSee('"bar_name":""') // todo now time is flowing , and dusk can not mocking it.
                ->back()
                ->with('@first-form', function (Browser $table) {
                    $table->click('.el-date-editor:first-child .el-range-input:nth-child(2)')
                        ->keys('.el-date-editor:first-child .el-range-input:nth-child(2)', '12:34:56')
                        ->click('.el-date-editor:first-child .el-range-input:nth-child(4)')
                        ->keys(
                            '.el-date-editor:first-child .el-range-input:nth-child(4)',
                            ['{control}', 'a'],
                            '13:01:07'
                        );
                })
                ->pause(200)
                ->click('#submit')
                ->assertSee('"bar_name":"12:34:56,13:01:07"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('time_range')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"12:11:34,14:22:33"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->click('.el-date-editor:first-child .el-range-input:nth-child(2)')
                        ->keys('.el-date-editor:first-child .el-range-input:nth-child(2)', '12:34:56')
                        ->click('.el-date-editor:first-child .el-range-input:nth-child(4)')
                        ->keys(
                            '.el-date-editor:first-child .el-range-input:nth-child(4)',
                            ['{control}', 'a'],
                            '13:01:22'
                        );
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"12:34:56,13:01:22"');
        });
    }
}
