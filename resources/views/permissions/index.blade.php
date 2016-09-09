@extends('layouts.admin')

@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="{{url('admin/dash')}}">{!!trans('admin/breadcrumb.home')!!}</a>
                <i class="fa fa-chevron-right"></i>
            </li>
            <li>
                <span>{!!trans('admin/breadcrumb.permission')!!}</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title">
    </h1>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">{!!trans('admin/permission.title')!!}</span>
            </div>
            <h1 class="pull-right">
                <a class="btn purple btn-outline pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('permissions.create') !!}">{!!trans('admin/permission.action.create')!!}</a>
            </h1>
        </div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('permissions.table')
            </div>
        </div>
    </div>
</div>
@endsection

