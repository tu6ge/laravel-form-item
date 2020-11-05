
<div id="{{$id}}" >
    <el-date-picker v-model="value" type="{{$type}}" {{$append_el_prop}}></el-date-picker>
    <input type="hidden" name="{{$name}}" v-model="value" />
</div>

@include("input::include.element-ui")

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value:@json($value),
            };
        }
    });
</script>