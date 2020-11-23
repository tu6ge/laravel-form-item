# 输入框

## 可清空

<demo-block>
::: slot source
<el-input v-model="text3" placeholder="请输入内容" clearable></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text3" clearable ></x-input-text>
```
:::
</demo-block>

<script>
export default {
    data(){
        return {
            text3:'',
        }
    }
};
</script>