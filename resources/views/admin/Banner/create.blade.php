<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Color Admin | Banner添加</title>
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
            <li class="active">Banner 添加</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Banner 添加 <small>header small text goes here...</small></h1>
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
                        <h4 class="panel-title">Banner 添加</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal col-md-8 col-md-offset-1" method="POST" action="{{url('/admin/web/banner/store')}}">
                            @csrf

                            <div class="form-group">
                                <label class="col-md-3 control-label">Banner 名称</label>
                                <div class="col-md-9">
                                    <input name="title" type="text" class="form-control" placeholder="Please Enter The Banner Name" value="" autocomplete="off"/>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">类型</label>
                                <div class="col-md-9">
                                    <select id="type" name="type" data-placeholder="Choose Type" class="form-control">
                                        <option value="1">Others</option>
                                        <option value="2">Toilet</option>
                                        <option value="3">Car Park</option>
                                        <option value="4">Common Area</option>
                                        <option value="5">Dust Bin</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">排序</label>
                                <div class="col-md-9">
                                    <input name="sort" type="text" class="form-control" placeholder="Please Enter The Banner Sort" value="" autocomplete="off"/>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">链接</label>
                                <div class="col-md-9">
                                    <input name="url" type="text" class="form-control" placeholder="Please Enter The Banner Url" value="" autocomplete="off"/>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">上传</label>
                                <div class="col-md-9">
                                    <button type="button" class="layui-btn" id="banner-upload" style="float: left">上传图片</button>
                                    <div class="layui-upload-list" style="margin-top: -10px;margin-left: 25px;float: left">
                                        <img style="width: 180px;height: 120px" class="layui-upload-img" id="demo1">
                                        <p id="demoText"></p>
                                    </div>
                                    <input type="hidden" id="banner_img" name="banner_img" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label class="col-md-3 control-label"></label>
                                </div>
                                <div class="col-md-8">
                                    <div class="col-md-5 col-md-offset-1">
                                        <a onclick="window.history.go(-1); return false;" class="btn btn-sm btn-white"><i class="ion-android-arrow-back"></i> Back</a>
                                    </div>
                                    <div class="col-md-5 col-md-offset-1">
                                        <button type="submit" class="btn btn-sm btn-success"><i class="ion-android-done"></i> Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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



    });

</script>
<script>
    layui.use('upload', function(){
        var $ = layui.jquery
            ,upload = layui.upload;

        //普通图片上传
        var uploadInst = upload.render({
            elem: '#banner-upload'
            ,url: "/admin/web/banner/upload?_token={{ csrf_token() }}"
            ,before: function(obj){
                //预读本地文件示例，不支持ie8
                obj.preview(function(index, file, result){
                    $('#demo1').attr('src', result); //图片链接（base64）
                });
            }
            ,done: function(res){
                //如果上传失败
                if(res.code == 200){
                    $("#banner_img").val(res.img);
                    // $("input[name='banner_img']").val();
                }
                //上传成功
            }

        });


















    });
</script>
