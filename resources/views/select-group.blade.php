
<div id="{{$id}}" >
    <el-select v-model="value" {{ $attributes }}>
        @foreach($options as $item)
        <el-option-group label="{{$item['text']}}" {{$item['prop'] ?? ''}}>
            @foreach($item['children'] as $it)
            <el-option :value='@json($it['value'])' label="{{$it['text']}}" {{$it['prop'] ?? ''}}></el-option>
            @endforeach
        </el-option-group>
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