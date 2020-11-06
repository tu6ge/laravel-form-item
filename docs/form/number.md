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

<script>
export default {
    data(){
        return {
            number1:2,
        }
    }
};
</script>