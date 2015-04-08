@extends('admin/app')

@section('content')
<div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">首页</strong> / <small>权限控制</small>
    </div>
</div>

<div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-nav am-nav-tabs">
        <li><a href="{{ route('admin.rbac.role.index') }}">角色组</a></li>
        <li><a href="{{ route('admin.rbac.user.index') }}">用户</a></li>
        <li><a href="{{ route('admin.rbac.permission.index') }}">权限</a></li>
        <li class="am-active"><a href="{{ route('admin.rbac.role.edit',['id'=>$role->id]) }}">编辑角色</a></li>
    </ul>

    <div class="am-tabs-bd">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">

            @include('admin.alert')

            <form class="am-form" action="{{ route('admin.rbac.role.update',['id'=>$role->id]) }}" method="POST">
                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        角色标识
                    </div>
                    <div class="am-u-sm-8 am-u-md-4">
                        <input type="text" class="am-input-sm" name="name" value="{{ $role->name }}" disabled>
                    </div>
                    <div class="am-hide-sm-only am-u-md-6"></div>
                </div>

                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        显示名称
                    </div>
                    <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                        <input type="text" class="am-input-sm" name="display_name" value="{{ $role->display_name }}">
                    </div>
                    <div class="am-hide-sm-only am-u-md-6">选填</div>
                </div>

                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        说明
                    </div>
                    <div class="am-u-sm-8 am-u-md-4">
                        <input type="text" class="am-input-sm" name="description" value="{{ $role->description }}">
                    </div>
                    <div class="am-hide-sm-only am-u-md-6">选填</div>
                </div>


                <div class="am-g am-margin-top">
                    <div class="am-u-sm-8 am-u-md-4 am-u-sm-centered">
                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>

@stop

