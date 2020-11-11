<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\InputAbstract;

class InputAbstractTest extends TestCase
{
    public function testConstructName()
    {
        $bar = new Bar('test_name');

        $this->assertEquals($bar->name, 'test_name');
        $this->assertNull($bar->value);
        $this->assertNotNull($bar->id);
        $this->assertEquals($bar->type, '');
        $this->assertEquals($bar->append_el_prop, '');
    }

    public function testConstructValue()
    {
        $bar = new Bar('test_name', 'test_value');

        $this->assertEquals($bar->value, 'test_value');
    }

    public function testConstructId()
    {
        $bar = new Bar('test_name', 'test_value', 'div_id');

        $this->assertEquals($bar->id, 'div_id');
    }

    public function testConstructId2()
    {
        $bar = new Bar('test_name', 'test_value');
        $bar2 = new Bar('test_name', 'test_value');

        $this->assertNotEquals($bar->id, $bar2->id);
        $this->assertNotNull($bar->id);
        $this->assertNotEquals($bar->id, '');
    }

    public function testConstructType()
    {
        $bar = new Bar('test_name', null, null, 'bar_type');

        $this->assertEquals($bar->type, 'bar_type');
    }

    public function testConstructPlaceholder()
    {
        $bar = new Bar('test_name', null, null, '', 'foo');

        $this->assertEquals($bar->append_el_prop, ' placeholder=foo');
    }

    public function testConstructAppendElProp()
    {
        $bar = new Bar('test_name', null, null, '', '', 'foo');

        $this->assertEquals($bar->append_el_prop, ' foo');
    }

    public function testDefaultId()
    {
        $bar = new Bar('test_name');

        $res = $bar->defaultId();
        $this->assertEquals(strpos($res, 'input_') === 0, true);

        $res2 = $bar->defaultId();
        $this->assertNotEquals($res, $res2);
    }

    public function testAddElProp()
    {
        $bar = new Bar('test_name');

        $bar->addElProp('foo');
        $this->assertEquals($bar->append_el_prop, ' foo');

        $bar->addElProp('foo2');
        $this->assertEquals($bar->append_el_prop, ' foo foo2');
    }

    public function testRender()
    {
        $bar = new Bar('test');

        $this->expectExceptionMessage('View [laravelformitem\tests\view\components\bar] not found.');
        $bar->render();
    }
}

class Bar extends InputAbstract
{
}
