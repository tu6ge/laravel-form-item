# Text Input

## Basic usage

<demo-block>
::: slot source
<el-input placeholder="Please enter the content" v-model="text1"></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text1" placeholder="Please enter the content"></x-input-text>
```
:::
</demo-block>

## Limit length of input

<demo-block>
::: slot source
<el-input placeholder="Please enter the content" v-model="text2" maxlength=10 show-word-limit></el-input>
:::
::: slot highlight
``` html
<x-input-text name="text2" maxlength=10 show-word-limit></x-input-text>
```
:::
</demo-block>

::: tip
To learn more about the use of properties, see [API](/en/api.html#text) 
:::

## Textarea

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
