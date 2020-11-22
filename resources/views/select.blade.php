
<div id="{{$id}}" >
    <el-select v-model="value" {{ $attributes }}>
        @foreach($options as $item)
        <el-option :value='@json($item['value'])' label="{{$item['text']}}" {{$item['prop'] ?? ''}}></el-option>
        @endforeach
    </el-select>
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