# Laravel Form Item Component

developmenting

## TODO

1. 打算使用 blade 的 push 方式插入 js 和 css 文件，
由于 laravel 开放的 api 中无法判断开发者是否启用了某个 `@stack` ，这个功能延期处理
2. 文档中，级联菜单的数据源，必须设置 `leaf` 字段，声明这个是否是叶子节点，
可以设置 `disabled` 声明节点是否被禁用
3. element 本地化设置，影响到了 `date-picker`
4. 在 laravel 之外使用 blade 模板引擎
5. 计数器，可以加一个步数属性，待更新文档
6. ~~添加单元测试~~ 已完成
7. 已知问题，多选按钮，提交后返回页面，再次提交数据异常，计划给 Element-UI 提交 issue
8. 已知问题，select 没有默认值的时候，没有默认选中第一个值
9. 日期选择器已知问题