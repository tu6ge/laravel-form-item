
<div id="{{$id}}" >
    <el-time-select v-model="value"></el-time-select>
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