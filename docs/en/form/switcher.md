# Switcher

## Basic usage

<demo-block>
Please note that if you need to pass in an unselected default value, it should be `:value="false"`, and this `false` will not be treated as a string
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

::: tip
After submitting the form, the data directly obtained is string type `true` or `false`,
You need to use the following statement to convert a string to a boolean type.
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