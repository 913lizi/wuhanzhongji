/**
 * Created by XiaoAiLing on 2019/5/15.
 */

function formDestroy(layui, table_id){
    var table = layui.table;
    var layer = layui.layer;
    table.on('checkbox('+table_id+')', function(obj){
        var data = obj.data;
    });
    layui.jquery, active = {
        getid: function () {
            var arr = [];
            var checkStatus = table.checkStatus(table_id)
                , data = checkStatus.data;
            for (var i = 0; i < data.length; i++) {    //循环筛选出id
                arr.push(data[i].id);
            }
            if(arr.length < 1){
                layer.msg("Please Select CheckBox To Delete!");
                return;
            }
            layer.confirm('Are you sure you want to delete it?', {icon: 3, title: 'Message', btn: ['Confirm', 'Cancel']}, function(index, layero)
            {
                $("#delete_id").val(JSON.stringify(arr));
                $("form[name='destroy_form']").submit();

            }, function(index){
                console.log('you cancel');
            })
        }
    }
    $('.delete').on('click', function(){
        var type = $(this).data('type');
        active[type] ? active[type].call(this) : '';
    });
}
