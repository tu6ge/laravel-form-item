# 时间选择器

## 基础用法

<demo-block>
时间选择器，可以是时分秒，也可以是时分，默认是时分
::: slot source
<el-time-select v-model="time_select1">
</el-time-select>
:::
::: slot highlight

``` html
<x-input-time-select name="time_select1" ></x-input-time-select>
```
:::
</demo-block>

::: tip 提示
时间选择器，默认开始时间是 `09:00` ,结束时间 `18:00`， 时间间隔是 `30` 分钟，如需修改，请查看 [API](/api.html#time-picker-时间选择器) 文档
:::

## 有默认值

<demo-block>
时间选择器，可以是时分秒，也可以是时分，默认是时分
::: slot source
<el-time-select v-model="time_select2">
</el-time-select>
:::
::: slot highlight

``` html
<x-input-time-select name="time_select1" value="09:30" ></x-input-time-select>
```
:::
</demo-block>

## 时间范围

<demo-block>
时间选择器，可以是时分秒，也可以是时分，默认是时分
::: slot source
<el-time-picker v-model="time_select3" is-range>
</el-time-picker>
:::
::: slot highlight

``` html
<x-input-time-range name="time_select3" ></x-input-time-range>
```
:::
</demo-block>

## 有默认值的时间范围

<demo-block>
时间选择器，可以是时分秒，也可以是时分，默认是时分
::: slot source
<el-time-picker v-model="time_select4" is-range>
</el-time-picker>
:::
::: slot highlight

``` html
<x-input-time-range name="time_select4" :value='["08:40:15","09:40:55"]'></x-input-time-range>
```
:::
</demo-block>

::: tip 提示
日期选择器用到了前端 `dayjs` 库，以及该库的 `utc` 插件和 `customParseFormat` 插件，如果页面中已经引入了这个库或者插件，请根据 [文档](/guide/getting-started.html#自定义配置) 修改相应的配置
:::

<script>
export default {
    data(){
        return {
            time_select1:'',
            time_select2:"09:30",
            time_select3:[new Date(), new Date()],
            time_select4:[new Date(2016, 9, 10, 8, 40, 15), new Date(2016, 9, 10, 9, 40, 55)],
            slider2:80,
        };
    }
};
</script>