<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class TextTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('text')
                ->click('#submit')
                ->assertSee('"bar_name":null')
                ->back()
                ->keys('.el-input__inner', 'bbb')
                ->click('#submit')
                ->assertSee('"bar_name":"bbb"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('text')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"aaa"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->keys('.el-input__inner', 'bbb');
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"aaabbb"');

        });
    }
}
