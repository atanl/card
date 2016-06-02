@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
            <tr>
                <th>姓名</th>
                <th>职位</th>
                <th>手机号码</th>
                <th>邮箱</th>
                <th>微信号</th>
                <th>QQ号</th>
                <th>固定电话</th>
                <th>办公地址</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->mobile_no }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->wechat }}</td>
                    <td>{{ $employee->qq }}</td>
                    <td>{{ $employee->tel_no }}</td>
                    <td>{{ $employee->address }}</td>
                </tr>
            @endforeach
            <tr>
            </tr>
            </tbody>
        </table>

    </div>
@endsection
