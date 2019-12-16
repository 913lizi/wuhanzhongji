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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
    <link href="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL CSS STYLE ================== -->


</head>


<body>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">网站设置</a></li>
        <li class="active">网站设置</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">网站设置<small>header small text goes here...</small></h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-6 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">网站设置</h4>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ url('admin/web/settings/post') }}" method="POST" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label class="col-md-3 control-label">网站域名</label>
                            <div class="col-md-9">
                                <input type="text" name="web_url" class="form-control" value="{{$data->web_url}}" placeholder="网站域名" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">网站主标题</label>
                            <div class="col-md-9">
                                <input type="text" name="web_main_title" value="{{$data->web_main_title}}" class="form-control" placeholder="网站主标题" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">网站副标题</label>
                            <div class="col-md-9">
                                <input type="text" name="web_sub_title" value="{{$data->web_sub_title}}" class="form-control" placeholder="网站副标题" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">网站关键词</label>
                            <div class="col-md-9">
                                <textarea name="web_keyword" class="form-control"  placeholder="网站关键词" rows="5">{{$data->web_keyword}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">网站简介</label>
                            <div class="col-md-9">
                                <textarea name="web_description" class="form-control" placeholder="网站简介" rows="5">{{$data->web_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">统计代码</label>
                            <div class="col-md-9">
                                <textarea name="web_statistics" class="form-control" placeholder="统计代码" rows="5">{{$data->web_statistics}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">网站备案信息</label>
                            <div class="col-md-9">
                                <input type="text" name="web_icp" class="form-control" value="{{$data->web_icp}}" placeholder="网站备案信息" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-sm btn-success">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->

    </div>
    <!-- end row -->

</div>
<!-- end #content -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{asset('assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!--[if lt IE 9]>
<script src="{{asset('assets/crossbrowserjs/html5shiv.js')}}"></script>
<script src="{{asset('assets/crossbrowserjs/respond.min.js')}}"></script>
<script src="{{asset('assets/crossbrowserjs/excanvas.min.js')}}"></script>
<![endif]-->
<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="{{asset('assets/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('assets/plugins/morris/morris.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js')}}"></script>
<script src="{{asset('assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
<script src="{{asset('assets/js/dashboard-v2.min.js')}}"></script>
<script src="{{asset('assets/js/apps.min.js')}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
