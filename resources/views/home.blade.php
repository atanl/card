@extends('layouts.app')

@section('content')
<template id="test" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    const roHome = { template: '#test' };

    var vmHome = new Vue({
        el: "#test"
    })
</script>
@endsection
