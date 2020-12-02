# 滑块

## 基础用法

<demo-block>
::: slot source
<p><el-slider v-model="slider1"></el-slider></p>
<p><el-slider v-model="slider2"></el-slider></p>
:::
::: slot highlight
``` html
<x-input-slider name="slider1" :value="20"></x-input-slider>
<x-input-slider name="slider2" :value="80"></x-input-slider>
```
:::
</demo-block>

<script>
export default {
    data(){
        return {
            slider1:20,
            slider2:80,
        };
    }
};
</script>