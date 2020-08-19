@extends('app')


@section('content')
    <order-info :order='@json($order)' product-route='{{route('product', false)}}'>
    </order-info>

    <div style="display: flex; justify-content: right">
    <button class= "btn btn-primary" onclick="window.open('/orders')">Retour</button>
    </div>
@stop
