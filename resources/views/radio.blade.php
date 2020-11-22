
<div id="{{$id}}" >
    <el-radio-group v-model="value" {{ $attributes }}>
        @foreach($options as $item)
        <el-radio :label='@json($item['value'])' {{$item['prop'] ?? ''}}>{{$item['text']}}</el-radio>
        @endforeach
    </el-radio-group>
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