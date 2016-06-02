@extends('layouts.handset')

@section('content')
    <div class="container">

        <div>{{ $employee->company->name }}</div>
        <div>{{ $employee->name }}</div>
        <div>{{ $employee->qq }}</div>
        <div>{{ $employee->email }}</div>
        <div>{{ $employee->wechat }}</div>
        <div>{{ $employee->tel_no }}</div>
        <div>{{ $employee->mobile_no }}</div>
        <div>{{ $employee->address }}</div>

    </div>
@endsection
