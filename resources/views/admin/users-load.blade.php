<div class="row" style="margin-bottom: 5px;">
    <div class="col-md-1">ID</div>
    <div class="col-md-2">Nom</div>
    <div class="col-md-2">E-mail</div>
</div>
@foreach ($users as $user)
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-1">{{$user->id}}</div>
        <div class="col-md-2">{{$user->name}}</div>
        <div class="col-md-2" style="margin-right: 60px;">{{$user->email}}</div>
        <div class="col-md-1"><a href="{{ url('/admin/edit-user/'.$user->id) }}">Editer</a></div>
        <!-- <div class="col-md-1"><a href="/orders" target="_blank" style="margin-right: 20px;">Commandes</a></div> -->

        <div class="col-md-2">
            <form name="clearCart" method="POST" action="{{ route('cart.delete') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="hidden" name="_method" value="put">
                <button style="margin: 0 15px;" class="btn btn-xs btn-default"  type="submit" data-toggle="confirmation-singleton">
                    Delogguer/Supprimer le panier
                </button>
            </form>
        </div>
<!--
        <div class="col-md-1" style="margin: 0 15px;">
            <form method="POST" action="{{ route('user.destroy', [$user->id]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button style="padding: 2px 8px; margin-right:10px;" class="btn btn-primary" type="submit">Supprimer</button>
            </form>
        </div>
-->
        <div class="col-md-2" style="margin-left: 100px; padding-left: 10px;">
            <form method="POST" action="{{ route('user.destroy') }}">
                <input type="hidden" name="id" value="{{ $user->id }}">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-primary"  type="submit" style="height: 20px; font-size: small; padding-top: 0px;" data-toggle="confirmation-singleton">
                    Supprimer
                </button>
            </form>
        </div>

    </div>
@endforeach
<div class="users-pagination">
{{ $users->links() }}
</div>


