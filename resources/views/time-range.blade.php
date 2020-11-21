
<div id="{{$id}}" >
    <el-time-picker v-model="value" is-range {{$append_el_prop}} @if($picker_options):picker-options='@json($picker_options)' @endif></el-time-picker>
    <input type="hidden" name="{{$name}}" :value="value_string" />
</div>

@include("input::include.element-ui")

@include('input::include.day')

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value: [
                    @if(isset($array_value[0]))
                        dayjs(@json($array_value[0]), @json($format)).toDate(),
                    @else
                        dayjs().toDate(),
                    @endif
                    @if(isset($array_value[1]))
                        dayjs(@json($array_value[1]), @json($format)).toDate(),
                    @else
                        dayjs().toDate(),
                    @endif
                ]
            };
        },
        computed:{
            value_string(){
                return dayjs(this.value[0]).format('HH:mm:ss')
                 + ',' + dayjs(this.value[1]).format('HH:mm:ss')
            }
        }
    });
</script>