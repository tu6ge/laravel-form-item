# Laravel Form Item Component

[![Tests](https://github.com/tu6ge/laravel-form-item/workflows/Tests/badge.svg?branch=master)](https://github.com/tu6ge/laravel-form-item/)
[![Coverage Status](https://coveralls.io/repos/github/tu6ge/laravel-form-item/badge.svg?branch=master)](https://coveralls.io/github/tu6ge/laravel-form-item?branch=master)


developmenting

## 测试

- 运行全部测试
```base
composer test
```
- 只运行单元测试
```base
composer test-unit
```
- 只运行浏览器测试(dusk)
```base
composer test-browser
```

## TODO

1. 打算使用 blade 的 push 方式插入 js 和 css 文件，
由于 laravel 开放的 api 中无法判断开发者是否启用了某个 `@stack` ，这个功能延期处理
2. ~~文档中，级联菜单的数据源，必须设置 `leaf` 字段，声明这个是否是叶子节点，
可以设置 `disabled` 声明节点是否被禁用~~ 已完成
3. element 本地化设置，影响到了 `date-picker`
4. 在 laravel 之外使用 blade 模板引擎 -- 一个人精力有限，期待社区能给出测试用例
5. ~~计数器，可以加一个步数属性，待更新文档~~ 已完成
6. ~~添加单元测试~~ 已完成
7. 已知问题，多选按钮，提交后返回页面，再次提交数据异常，计划给 Element-UI 提交 issue
8. 已知问题，select 没有默认值的时候，没有默认选中第一个值
9. 日期选择器已知问题
10. 中文文档修改
11. 英文文档
12. ~~级联菜单的异步加载，未实现浏览器测试~~ 已完成
13. 滑块的范围选择
