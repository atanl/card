@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <div>
            公司全称：{{ $company->name }}
        </div>
        <div>
            公司简称：{{ $company->short_name }}
        </div>
        <div>
            默认手机号码：{{ $company->mobile_no }}
        </div>
        <div>
            默认固定电话号码：{{ $company->tel_no }}
        </div>
        <div>
            公司地址：{{ $company->address }}
        </div>
        <div>
            公司简介：{{ $company->intro }}
        </div>
    </div>

</div>
@endsection
