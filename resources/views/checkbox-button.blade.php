
<div id="{{$id}}" >
    <el-checkbox-group v-model="value" {{$append_el_prop}}>
        @foreach($options as $item)
        <el-checkbox-button :label='@json($item['value'])' {{$item['prop'] ?? ''}}>{{$item['text']}}</el-checkbox-button>
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