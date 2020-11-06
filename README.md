# Laravel Form Item Component

developmenting

## TODO

1. 打算使用 blade 的 push 方式插入 js 和 css 文件，
由于 laravel 开放的 api 中无法判断开发者是否启用了某个 `@stack` ，这个功能延期处理
2. 文档中，级联菜单的数据源，必须设置 `leaf` 字段，声明这个是否是叶子节点，
可以设置 `disabled` 声明节点是否被禁用
3. element 本地化设置，影响到了 `date-picker`
4. 在 laravel 之外使用 blade 模板引擎
5. 计数器，可以加一个步数属性