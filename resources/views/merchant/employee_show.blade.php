@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            姓名：{{ $employee->name }}
        </div>
        <div>
            职位：{{ $employee->position }}
        </div>
        <div>
            手机号码：{{ $employee->mobile_no }}
        </div>
        <div>
            邮箱：{{ $employee->email }}
        </div>
        <div>
            微信号：{{ $employee->wechat }}
        </div>
        <div>
            QQ号：{{ $employee->qq }}
        </div>
        <div>
            固定电话：{{ $employee->tel_no }}
        </div>
        <div>
            办公地址：{{ $employee->address }}
        </div>
    </div>
@endsection
