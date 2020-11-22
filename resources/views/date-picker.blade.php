
<div id="{{$id}}" >
    <el-date-picker v-model="value" type="{{$type}}" {{$append_el_prop}} ></el-date-picker>
    <input type="hidden" name="{{$name}}" :value="value" />
</div>

@include("input::include.element-ui")

@include('input::include.day')

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            return {
                value: @if($value)
                    dayjs(@json($value)).toDate()
                    @else
                    ''
                @endif
                ,
            };
        },
        // computed:{
        //     final_value(){
        //         if (typeof this.value == 'string') {
        //             return this.value;
        //         }
        //     }
        // }
    });
</script>