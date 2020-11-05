
<div id="{{$id}}" >
    <el-time-picker v-model="value" {{$append_el_prop}} :picker-options='@json($picker_options)'></el-time-picker>
    <input type="hidden" name="{{$name}}" v-model="value" />
</div>

@include("input::include.element-ui")

@include('input::include.day')

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value: [
                    @if(isset($value[0]))
                    dayjs(@json($value[0]), @json($format)).toDate(),
                    @else
                            '',
                    @endif
                    @if(isset($value[1]))
                    dayjs(@json($value[1]), @json($format)).toDate(),
                    @else
                        '',
                    @endif
                ]
            };
        }
    });
</script>