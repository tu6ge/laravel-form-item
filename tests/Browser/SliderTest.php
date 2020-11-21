<?php

namespace LaravelFormItem\Tests\Browser;

use Laravel\Dusk\Browser;
use LaravelFormItem\Tests\BrowserTestCase;

class SliderTest extends BrowserTestCase
{
    public function testAdd()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('slider')
                ->click('#submit')
                ->assertSee('"bar_name":"0"')
                ->back()
                ->dragRight('.el-slider__button', 100)
                ->click('#submit')
                ->assertSee('"bar_name":"13"');
        });
    }

    public function testEdit()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('slider')
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"11"')
                ->back()
                ->with('@second-form', function ($table) {
                    $table->dragRight('.el-slider__button', 100);
                })
                ->click('#submit-edit')
                ->assertSee('"bar_name_edit":"24"');
        });
    }
}
