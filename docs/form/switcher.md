# 开关

## 基础用法

<demo-block>
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