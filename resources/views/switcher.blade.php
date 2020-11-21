
<div id="{{$id}}" >
    <el-switch v-model="value" {{$append_el_prop}}></el-switch>
    <input type="hidden" name="{{$name}}" v-model="value" />
</div>

@include("input::include.element-ui")

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value:@json($value ? true : false),
            };
        }
    });
</script>