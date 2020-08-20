@extends('app')


@section('content')

    <div class="jumbotron jumbotron-fluid" style="background-color: white; border-style: double; border-color: black; border-width: 10px; border-radius: 1px;padding-left: 20px;">
        <div class="container">
        <img src= {{ asset('images/nos_estampes.png') }} style="width: 65%; height: auto; float: center;">
        </div>
    </div>
    <div class="row product-list">
        @foreach ($products as $product)
            <product :product="{{ $product }}"></product>
        @endforeach
    </div>

@stop