# 计数器

## 基础用法

<demo-block>
默认值 2 
::: slot source
<el-input-number v-model="number1"></el-input-number>
:::
::: slot highlight
``` html
<x-input-number name="number1" :value="2" ></x-input-number>
```
:::
</demo-block>

## 禁用状态

<demo-block>
&nbsp;
::: slot source
<el-input-number v-model="number1" :disabled="true"></el-input-number>
:::
::: slot highlight
``` html
<x-input-number name="number1" :value="2" disabled></x-input-number>
```
:::
</demo-block>

## 步数

<demo-block>
&nbsp;
::: slot source
<el-input-number v-model="number1" :step="2"></el-input-number>
:::
::: slot highlight
``` html
<x-input-number name="number1" :value="2" step="2"></x-input-number>
```
:::
</demo-block>

<!--
## 尺寸

<demo-block>
&nbsp;
::: slot source
<el-input-number v-model="num1" class="number-size"></el-input-number>
<el-input-number size="medium" v-model="num2" class="number-size"></el-input-number>
<el-input-number size="small" v-model="num3" class="number-size"></el-input-number>
<el-input-number size="mini" v-model="num4" class="number-size"></el-input-number>
:::
::: slot highlight
``` html
<x-input-number name="number1" :value="1" ></x-input-number>
<x-input-number name="number1" :value="1" size="medium" ></x-input-number>
<x-input-number name="number1" :value="1" size="small" ></x-input-number>
<x-input-number name="number1" :value="1" size="mini" ></x-input-number>
```
:::
</demo-block>
-->

<script>
export default {
    data(){
        return {
            number1:2,
            num1:1,
            num2:1,
            num3:1,
            num4:1,
        };
    }
};
</script>
<style>
.number-size{
    display: block;
    margin:10px;
}
</style>