
<div id="{{$id}}" >
    <el-input v-model="value" type="{{$type ?: 'text'}}" {{$append_el_prop}}></el-input>
    <input type="hidden" name="{{$name}}" v-model="value" />
</div>

@include("input::include.element-ui")

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value:'{{$value}}'
            };
        }
    });
</script>