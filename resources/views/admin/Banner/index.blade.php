<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | 网站设置</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->

    <link href="{{ asset('assets/plugins/layui/css/layui.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->


</head>


<body>

<!-- begin #page-loader -->
{{--<div id="page-loader" class="fade in"><span class="spinner"></span></div>--}}
<!-- end #page-loader -->
<!-- begin #content -->
<div id="page-container" class="page-container">
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="{{ route('dashboard.index') }}">Home</a></li>
            <li class="active">Banner 列表</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Banner 列表 <small>header small text goes here...</small></h1>
        <!-- end page-header -->

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                        <h4 class="panel-title">Banner 列表</h4>
                    </div>
                    <div class="panel-body">
                        <div style="display: none;">
                        </div>
                        <table id="areaTable" lay-filter="areaTable"></table>
                        <script type="text/html" id="toolbar">
                            <div class="form-inline">
                                    <button type="button" onclick='window.location.href="{{ url('admin/web/banner/create') }}"' class="btn btn-primary btn-sm m-r-5">
                                        <i class="glyphicon glyphicon-plus" aria-hidden="true"></i> Add New
                                    </button>

                                    <button type="button" class="btn btn-primary btn-sm m-r-5 delete" data-type="getid">
                                        <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                        <form  name="destroy_form" method="POST" action="{{url('area/destroy')}}">
                                            @csrf
                                            <input type="hidden" name="delete_id" id="delete_id">
                                            {{ method_field('DELETE') }}
                                        </form>
                                    </button>


                                <div class="input-group">
                                    <input name="keyword" type="text" class="form-control input-sm" placeholder="keyword" value="" autocomplete="off"/>
                                    <span class="input-group-btn">
                                        <button class="btn btn-success btn-sm" type="button" lay-event="filter">Filter</button>
                                    </span>
                                </div>
                            </div>
                        </script>
                        <script type="text/html" id="bar">
                            <div class="btn-group">
                                <button type="button" class="layui-btn layui-btn-sm">修改</button>
                                <button type="button" class="layui-btn layui-btn-danger layui-btn-sm">删除</button>


                            </div>
                        </script>

                            <script type="text/html" id="qrcodeBar">
                                <i class="fa fa-2x fa-qrcode" lay-event="qrcode"></i>
                            </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end #content -->
</div>
<!-- end #content -->
<!-- end page container -->


<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/js/apps.min.js')}}"></script>、
<script src="{{ asset('assets/js/iframe-mini.js') }}"></script>
<script src="{{ asset('assets/js/form-delete.js') }}"></script>
<script src="{{ asset('assets/plugins/layui/layui.js') }}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
<script>
    $(document).ready(function() {

        App.init();


        layui.use(['layer','table'], function(){
            var table = layui.table;
            table.render({
                elem: '#areaTable',
                height: 719,
                limit: 15,
                toolbar: '#toolbar',
                defaultToolbar: ['filter'],
                limits: [10, 15, 20, 30, 40, 50],
                autoSort: false,
                url: '/admin/web/banner',
                page: true,
                cols: [[
                    {type:'numbers',fixed: 'left'},
                    {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left',type:'checkbox'},
                    {field: 'id', title: 'ID', width:80, sort: true, fixed: 'left'},
                    {field: 'title', title: 'Banner 标题',align:'center'},
                    {field: 'type', title: 'Banner 类型',align:'center'},
                    {field: 'url', title: 'Bnner Url',align:'center'},
                    {field: 'sort', title: '排序',align:'center'},
                    {field: 'img', title: '图片',align:'center',templet:function (data) {
                        return '<img style="width:80px;height:25px" src="'+data.img+'">'
                        }},

                    {fixed: 'right', title:'操作', toolbar: '#bar',width:150,align:'center'}
                ]]
            });
            //监听排序
            table.on('sort(areaTable)',function(obj){
                table.reload('areaTable', {
                    initSort: obj,
                    where: {field: obj.field ,order: obj.type}
                });
            });
            //监听操作按钮
            table.on('tool(areaTable)', function(data){
                var id = data.data.id;
                if(data.event === 'edit'){
                    window.location.href='/area/'+id+'/edit';
                }
                if(data.event === 'qrcode'){
                    layer.open({
                        type: 2,
                        area: ['170px', '210px'],
                        fixed: false, //不固定
                        maxmin: false,
                        content: 'area/qrcode/'+id
                    });
                }
            });
            //监听筛选搜索
            table.on('toolbar(areaTable)', function(data){
                if(data.event === 'filter'){
                    var keyword = $('input[name=keyword]').val();
                    var project_id = $('select[name=project_id]').val();
                    var type  = $("select[name=type]").val();
                    var distinct_id = $("#distinct_id").val();
                    table.reload('areaTable', {where: {keyword: keyword,project_id:project_id,type:type, distinct_id:distinct_id}},true);
                }
            });

            formDestroy(layui,'areaTable');
        });
    });
</script>
