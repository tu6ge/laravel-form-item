
<div id="{{$id}}" >
    @if($options)
        <el-cascader v-model="value" :options='@json($options)'></el-cascader>
    @else
        <el-cascader v-model="value" :props="props"></el-cascader>
    @endif
    <input type="hidden" name="{{$name}}" v-model="value" />
</div>

@include("input::include.element-ui")

@if($resource)
    @include("input::include.axios")
@endif

<script>
    var x_input_{{$id}} = new Vue({
        el:'#{{$id}}',
        data(){
            let resource = '{{$resource}}';
            return {
                value:@json($value),
                props:{
                    lazy: true,
                    lazyLoad (node, resolve) {
                        const { level ,value } = node;
                        let val  = value ? value: 0;

                        axios.get(resource.replace('__pid__', val))
                            .then(res=>{
                                if(res.status!= 200){
                                    return false
                                }
                                let list = res.data.map(item =>{
                                    item.label = item.text;
                                    return item;
                                });
                                resolve(list);
                            });
                    }
                }
            };
        }
    });
</script>