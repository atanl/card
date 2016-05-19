@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-horizontal" role="form" action="{{ route('merchant.company.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">公司全称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="广州啪嗒信息科技有限公司">
            </div>
        </div>

        <div class="form-group">
            <label for="short_name" class="col-sm-2 control-label">公司简称</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="short_name" name="short_name" placeholder="啪嗒科技">
            </div>
        </div>

        <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">默认手机号码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="当员工的手机号码没有设置的时候默认显示这个号码">
            </div>
        </div>

        <div class="form-group">
            <label for="tel_no" class="col-sm-2 control-label">默认固定电话号码</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tel_no" name="tel_no" placeholder="当员工的固定号码没有设置的时候默认显示这个号码">
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-2 control-label">公司地址</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="当员工的办公地址没有设置时默认显示这个地址">
            </div>
        </div>

        <div class="form-group">
            <label for="intro" class="col-sm-2 control-label">公司简介</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="intro" name="intro" placeholder="公司简介">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">提交</button>
            </div>
        </div>

    </form>
</div>
@endsection
