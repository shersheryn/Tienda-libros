@extends('admin.admin')

@section('left-column')
    @include('admin.admin-left-column')
@stop
@section('content')

    <div class="jumbotron jumbotron-fluid" style="background-color:white; border-style:solid; border-width:1px;">
        <div class="container">
            <h3 class="display-3">PANNEL</h3>
        </div>
    </div>
    <div class="row product-list">
        <h1>Let's admin this site</h1>
    </div>
@stop