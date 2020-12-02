# 日期选择器 (beta)

::: warning 注意
日期选择器还处于测试阶段。如需使用，请阅读源码。
:::

## 基础用法

<demo-block>
基础用法
::: slot source
<el-date-picker v-model="date_picker1">
</el-date-picker>
:::
::: slot highlight

``` html
<x-input-date-picker name="time_select1" ></x-input-date-picker>
```
:::
</demo-block>

## 选择周

<demo-block>
可以选择某个周
::: slot source
<el-date-picker v-model="date_picker2" type="week">
</el-date-picker>
:::
::: slot highlight

``` html
<x-input-date-picker name="time_select2" type="week"></x-input-date-picker>
```
:::
</demo-block>

## 选择年

<demo-block>
可以选择某一年
::: slot source
<el-date-picker v-model="date_picker3" type="year">
</el-date-picker>
:::
::: slot highlight

``` html
<x-input-date-picker name="time_select3" type="year"></x-input-date-picker>
```
:::
</demo-block>

## 选择多个日期

<demo-block>
可以同时选择多个日期
::: slot source
<el-date-picker v-model="date_picker4" type="dates">
</el-date-picker>
:::
::: slot highlight

``` html
<x-input-date-picker name="time_select4" type="dates"></x-input-date-picker>
```
:::
</demo-block>

::: tip 提示
时间范围选择器用到了前端 `dayjs` 库，以及该库的 `utc` 插件和 `customParseFormat` 插件，如果页面中已经引入了这个库或者插件，请根据 [文档](/guide/getting-started.html#自定义配置) 修改相应的配置
:::

<script>
export default {
    data(){
        return {
            date_picker1:'',
            date_picker2:'',
            date_picker3:'',
            date_picker4:'',
        };
    }
};
</script>

<style lang="scss">
.el-picker-panel__body {
    table {
        display: table;
        border-collapse: separate;
        tbody{
            margin:0;
        }
        tr{
            border-top:0;
            background-color:transparent;
        }
        th,td{
            border:0;
        }
    }
}
</style>