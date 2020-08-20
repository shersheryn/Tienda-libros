@extends('app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <h3 class="display-3">Votre panier</h3>
    </div>

    <div class="product-form">
        <form name="productCart" class="form-horizontal">
            @include('layouts.error')

            @if(!empty($products))
                <cart
                    :products="{{json_encode($products)}}"
                    :shipping="{{json_encode($shippingMethods)}}"

                    @if (!empty($relatedProduct))
                        :related-product="{{json_encode($relatedProduct)}}"
                    @else
                        :related-product="{}"
                    @endif
                    >
                </cart>
            @endif

        </form>
    </div>
    <button class= "btn btn-primary" onclick="window.open('/shop')">Continuez vos achats</button>
<br>
<br> 

@stop
