# Time Picker

## Basic usage

<demo-block>
Time picker value format, can be hour,minute,second, also can be hour,minute, the default is hour,minute
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

::: tip
The default start time of time picker is `09:00` ,and the default end time of time picker is `18:00`. The time interval is 30 minutes. If you need to modify it, see [API](/en/api.html#time-picker) 
:::

## Default Value

<demo-block>
Time picker value format, can be hour,minute,second, also can be hour,minute, the default is hour,minute
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

## Range

<demo-block>
Time picker value format, can be hour,minute,second, also can be hour,minute, the default is hour,minute
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

## Default Value Of Time Range

<demo-block>
Time picker value format, can be hour,minute,second, also can be hour,minute, the default is hour,minute
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

::: tip
time picker is useing `dayjs` npm, and plugin of this package ,eg: `utc` and `customParseFormat`, If you have already introduced this library or plug-in to your page, please click [docs](/en/guide/getting-started.html#custom-config) ,update configure.
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