<?php

namespace LaravelFormItem\Tests\Traits;

use InvalidArgumentException;
use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\Traits\Option;
use ReflectionMethod;

class OptionTest extends TestCase
{
    public function testFormatOptionsExceptionNull()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatOptions');
        $formatOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('bar input option is null');
        call_user_func_array($formatOptions, ['']);
    }

    public function testFormatOptionsExceptionAttr()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatOptions');
        $formatOptions = $reflector->getClosure($fixture);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('bar option Collection is must have "value","text" property');

        call_user_func_array($formatOptions, [
            [
                [
                    'value' => 1,
                    'text'  => 'foo',
                ],
                [
                    'value' => 2,
                ],
            ],
        ]);
    }

    public function testFormatOptionsExceptionAttr2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatOptions');
        $formatOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('bar option Collection is must have "value","text" property');
        call_user_func_array($formatOptions, [
            [
                [
                    'value' => 1,
                    'text'  => 'foo',
                ],
                [

                ],
            ],
        ]);
    }

    public function testFormatOptionsExceptionAttr3()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatOptions');
        $formatOptions = $reflector->getClosure($fixture);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('bar option Collection is must have "value","text" property');
        call_user_func_array($formatOptions, [
            collect([
                [
                    'value' => 1,
                    'text'  => 'foo',
                ],
                [
                    'value' => 2,
                ],
            ]),
        ]);
    }

    public function testFormatOptionsResult()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatOptions');
        $formatOptions = $reflector->getClosure($fixture);
        $arr = [
            [
                'value' => 1,
                'text'  => 'foo',
            ],
            [
                'value' => 2,
                'text'  => 'foo2',
            ],
        ];
        $res = call_user_func_array($formatOptions, [
            $arr,
        ]);

        $this->assertEquals(collect($arr), $res);
    }

    public function testConvertOptionsException()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'convertOptions');
        $convertOptions = $reflector->getClosure($fixture);

        $option = [
            [
                'text'      => 'aaa',
                'value'     => 1,
                'children'  => [
                    [
                        'label'     => 'aabb',
                        'value'     => 11,
                        'children'  => [],
                    ],
                ],
            ],
            [
                'text'      => 'bbb',
                'value'     => 3,
                'children'  => [
                    [
                        'text'      => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ],
            ],
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('cascader option is must has value,text field');
        call_user_func_array($convertOptions, [$option]);
    }

    public function testConvertOptionsException2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'convertOptions');
        $convertOptions = $reflector->getClosure($fixture);

        $option = [
            [
                'text' => 'aaa',
                'value' => 1,
                'children' => [
                    [
                        'text'      => 'aabb',
                        'value'     => 11,
                        'children'  => [
                            [
                                'text'      => 'bbb',
                                'children'  => [],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'text'      => 'bbb',
                'value'     => 3,
                'children'  => [
                    [
                        'text'      => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ],
            ],
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('cascader option is must has value,text field');
        call_user_func_array($convertOptions, [$option]);
    }

    public function testConvertOptions()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'convertOptions');
        $convertOptions = $reflector->getClosure($fixture);

        $option = [
            [
                'text'      => 'aaa',
                'value'     => 1,
                'children'  => [
                    [
                        'text'      => 'aabb',
                        'value'     => 11,
                        'children'  => [],
                    ],
                ],
            ],
            [
                'text'      => 'bbb',
                'value'     => 3,
                'children'  => [
                    [
                        'text'      => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ],
            ],
        ];

        $res_optione = call_user_func_array($convertOptions, [$option]);

        $this->assertEquals($res_optione, collect([
            [
                'text'      => 'aaa',
                'label'     => 'aaa',
                'value'     => 1,
                'children'  => collect([
                    [
                        'text'      => 'aabb',
                        'label'     => 'aabb',
                        'value'     => 11,
                        'children'  => [],
                    ],
                ]),
            ],
            [
                'text'      => 'bbb',
                'label'     => 'bbb',
                'value'     => 3,
                'children'  => collect([
                    [
                        'text'      => 'ccdd',
                        'label'     => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ]),
            ],
        ]));
    }

    public function testConvertOptions2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'convertOptions');
        $convertOptions = $reflector->getClosure($fixture);

        $option = [
            [
                'text'      => 'aaa',
                'value'     => 1,
                'children'  => [
                    [
                        'text'      => 'aabb',
                        'value'     => 11,
                        'children'  => [
                            [
                                'text'      => 'bbb',
                                'value'     => 1233,
                                'children'  => [],
                            ],
                        ],
                    ],
                ],
            ],
            [
                'text'      => 'bbb',
                'value'     => 3,
                'children'  => [
                    [
                        'text'      => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ],
            ],
        ];

        $res_optione = call_user_func_array($convertOptions, [$option]);

        $this->assertEquals($res_optione, collect([
            [
                'text'      => 'aaa',
                'label'     => 'aaa',
                'value'     => 1,
                'children'  => collect([
                    [
                        'text'      => 'aabb',
                        'label'     => 'aabb',
                        'value'     => 11,
                        'children'  => collect([
                            [
                                'text'      => 'bbb',
                                'label'     => 'bbb',
                                'value'     => 1233,
                                'children'  => [],
                            ],
                        ]),
                    ],
                ]),
            ],
            [
                'text'      => 'bbb',
                'label'     => 'bbb',
                'value'     => 3,
                'children'  => collect([
                    [
                        'text'      => 'ccdd',
                        'label'     => 'ccdd',
                        'value'     => 31,
                        'children'  => [],
                    ],
                ]),
            ],
        ]));
    }

    public function testFormateCascaderOptionsEmpty()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $this->assertEquals([], call_user_func_array($formateCascaderOptions, ['']));
    }

    public function testFormateCascaderOptionsException()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('option Collection is must have "value","text","children" property, and children must is an array');
        call_user_func_array($formateCascaderOptions, [
            [
                [
                    'value' => 1,
                    'text'  => 'foo',
                ],
            ],
        ]);
    }

    public function testFormateCascaderOptionsException2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('option Collection is must have "value","text","children" property, and children must is an array');
        call_user_func_array($formateCascaderOptions, [
            [
                [
                    'value'     => 1,
                    'text'      => 'foo',
                    'children'  => 'AAA',
                ],
            ],
        ]);
    }

    public function testFormateCascaderOptionsException3()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('option Collection is must have "value","text","children" property, and children must is an array');
        call_user_func_array($formateCascaderOptions, [
            [
                [
                    'value'     => 1,
                    'text'      => 'foo',
                    'children'  => [],
                ],
                [
                    'value'     => 1,
                    'children'  => [],
                ],
            ],
        ]);
    }

    public function testFormateCascaderOptionsException4()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('option Collection is must have "value","text","children" property, and children must is an array');
        call_user_func_array($formateCascaderOptions, [
            [
                [
                    'value'     => 1,
                    'text'      => 'foo',
                    'children'  => [],
                ],
                [
                    'text'      => 2,
                    'children'  => ['ADdd'],
                ],
            ],
        ]);
    }

    public function testFormateCascaderOptionsReturn()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $arr = [
            [
                'value'     => 1,
                'text'      => 'foo',
                'children'  => [],
            ],
            [
                'value'     => 2,
                'text'      => 2,
                'children'  => [],
            ],
        ];
        $res_arr = [
            [
                'value'     => 1,
                'text'      => 'foo',
                'label'     => 'foo',
                'children'  => [],
            ],
            [
                'value'     => 2,
                'text'      => 2,
                'label'     => 2,
                'children'  => [],
            ],
        ];
        $res = call_user_func_array($formateCascaderOptions, [
            $arr,
        ]);

        $this->assertEquals(collect($res_arr), $res);
    }

    public function testFormateCascaderOptionsReturn2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formateCascaderOptions');
        $formateCascaderOptions = $reflector->getClosure($fixture);

        $arr = [
            [
                'value'     => 1,
                'text'      => 'foo',
                'children'  => [
                    [
                        'value' => 11,
                        'text'  => 'foo1',
                    ],
                ],
            ],
            [
                'value'     => 2,
                'text'      => 2,
                'children'  => [
                    [
                        'value' => 22,
                        'text'  => 'bar1',
                    ],
                ],
            ],
        ];
        $re_arr = [
            [
                'value'     => 1,
                'text'      => 'foo',
                'label'     => 'foo',
                'children'  => collect([
                    [
                        'value' => 11,
                        'text'  => 'foo1',
                        'label' => 'foo1',
                    ],
                ]),
            ],
            [
                'value'     => 2,
                'text'      => 2,
                'label'     => 2,
                'children'  => collect([
                    [
                        'value' => 22,
                        'text'  => 'bar1',
                        'label' => 'bar1',
                    ],
                ]),
            ],
        ];
        $res = call_user_func_array($formateCascaderOptions, [
            $arr,
        ]);

        $this->assertEquals($re_arr, $res->toArray());
    }

    public function testFormatSelectGroupOptionsCheckNull()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('select group option is null');
        call_user_func_array($formatSelectGroupOptions, [
            '',
        ]);
    }

    public function testFormatSelectGroupOptionsCheckField()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $options = [
            '',
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('select group option Collection is must have "text" and "children" property');
        call_user_func_array($formatSelectGroupOptions, [
            $options,
        ]);
    }

    public function testFormatSelectGroupOptionsCheckField2()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $options = [
            [
                'text' => 'aaa',
            ],
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('select group option Collection is must have "text" and "children" property');
        call_user_func_array($formatSelectGroupOptions, [
            $options,
        ]);
    }

    public function testFormatSelectGroupOptionsCheckField3()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $options = [
            [
                'children' => [],
            ],
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('select group option Collection is must have "text" and "children" property');
        call_user_func_array($formatSelectGroupOptions, [
            $options,
        ]);
    }

    public function testFormatSelectGroupOptionsCheckField4()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $options = [
            [
                'text'      => 'aaa',
                'children'  => 'aaa',
            ],
        ];

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('select group option property"children" must is an array');
        call_user_func_array($formatSelectGroupOptions, [
            $options,
        ]);
    }

    public function testFormatSelectGroupOptionsCheckField5()
    {
        $fixture = app(Bar::class);
        $reflector = new ReflectionMethod(Bar::class, 'formatSelectGroupOptions');
        $formatSelectGroupOptions = $reflector->getClosure($fixture);

        $options = [
            [
                'text'      => 'aaa',
                'children'  => [],
            ],
        ];

        $res = call_user_func_array($formatSelectGroupOptions, [
            $options,
        ]);

        $this->assertEquals(collect($options), $res);
    }
}

class Bar
{
    use Option;
}
