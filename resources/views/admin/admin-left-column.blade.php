@extends('admin.admin')

@section('left-column') 
    <div class="row">
        
        <div><a href="{{ route('admin.categories') }}">Catégories</a></div>
        <div><a href="{{ route('admin.products') }}">Produits</a></div>
        <div><a href="{{ route('admin.users') }}">Utilisateurs</a></div>
<!--
        <div><a href="{{ route('admin.orders') }}">Orders</a></div>
        <div>Payment</div>
        <div><a href="{{ route('admin.shipping-methods') }}">Shipping</a></div>
        <div>Settings</div>
-->
    </div>

@stop