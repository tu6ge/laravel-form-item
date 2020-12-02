# Switcher

## Basic usage

<demo-block>
请注意，如果需要传入未选中的默认值，则应该是 `:value="false"` 这里的 `false` 不会当做字符串处理
::: slot source
<p><el-switch v-model="switch1"></el-switch></p>
<p><el-switch v-model="switch2"></el-switch></p>
:::
::: slot highlight
``` html
<x-input-switcher name="switch1" :value="true"></x-input-switcher>
<x-input-switcher name="switch2" :value="false"></x-input-switcher>
```
:::
</demo-block>

::: tip 提示
提交表单后，直接得到的数据是字符串类型的 `true` 或 `false` ,
需要使用如下语句把字符串转化成布尔类型
```php
$switch1 = $request->boolean('switch1');
```
:::

<script>
export default {
    data(){
        return {
            switch1:true,
            switch2:false,
        };
    }
};
</script>