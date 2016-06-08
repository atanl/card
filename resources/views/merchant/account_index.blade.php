@extends('layouts.app')

@section('content')
<div class="container">

    商家账户管理。

    <div>
        当前等级：{{ $account->grade or '没有等级信息，只能享受普通会员的待遇' }} <a href="{{ route('merchant.account.upgrade') }}">升级</a>
    </div>
    <div>
        有效期限：{{ $account->expiry_date or '永久' }}
    </div>
    <div>
        余额：{{ $account->balances }}
    </div>

</div>
@endsection
