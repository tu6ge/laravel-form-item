
<div id="{{$id}}" >
    <el-checkbox-group v-model="value">
        @foreach($options as $item)
        <el-checkbox :label='@json($item['value'])'>{{$item['text']}}</el-checkbox>
        @endforeach
    </el-checkbox-group>
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