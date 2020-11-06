# 输入框

## 基础用法

<demo-block>
::: slot source
<el-input placeholder="请输入内容" v-model="text1"></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text1" placeholder="请输入内容"></x-input-text>
```
:::
</demo-block>

## 限定输入字数

<demo-block>
::: slot source
<el-input placeholder="请输入内容" v-model="text2" maxlength=10 show-word-limit></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text2" appendElProp="maxlength=10 show-word-limit"></x-input-text>
```
:::
</demo-block>

::: tip
查看 [文档](/advanced/#appendelprop) 了解更多 appendElProp 的用法 
:::

## 文本域

<demo-block>
::: slot source
<el-input v-model="text3" type="textarea" placeholder="请输入内容" clearable></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text3" type="textarea"></x-input-text>
```
:::
</demo-block>

<script>
export default {
    data(){
        return {
            text1:'',
            text2:'',
            text3:'',
        }
    }
};
</script>
