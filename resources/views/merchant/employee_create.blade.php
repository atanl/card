@extends('layouts.app')

@section('content')
<div class="container">

    @if (isset($company))
        <form class="form-horizontal" role="form" action="{{ route('merchant.employee.store') }}" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">姓名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="张三">
                </div>
            </div>

            <div class="form-group">
                <label for="position" class="col-sm-2 control-label">职位</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="position" name="position" placeholder="CEO">
                </div>
            </div>

            <div class="form-group">
                <label for="mobile_no" class="col-sm-2 control-label">手机号码</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="手机号码">
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">邮箱</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="邮箱">
                </div>
            </div>

            <div class="form-group">
                <label for="wechat" class="col-sm-2 control-label">微信号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="wechat" name="wechat" placeholder="微信号">
                </div>
            </div>

            <div class="form-group">
                <label for="qq" class="col-sm-2 control-label">QQ号</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="qq" name="qq" placeholder="QQ号">
                </div>
            </div>

            <div class="form-group">
                <label for="tel_no" class="col-sm-2 control-label">固定电话</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tel_no" name="tel_no" placeholder="固定电话">
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">办公地址</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="办公地址">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
            </div>

        </form>

    @else
        <div>
            在添加员工之前必须完善公司信息。
        </div>
    @endif

</div>
@endsection


@section('script')
    @if (!isset($company))
        window.location.href="{{ route('merchant.company.create') }}";
    @endif
@endsection

