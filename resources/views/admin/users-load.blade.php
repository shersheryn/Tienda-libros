<div class="row" style="margin-bottom: 5px;">
    <div class="col-md-1">ID</div>
    <div class="col-md-2">Nom</div>
    <div class="col-md-2">E-mail</div>
</div>
@foreach ($users as $user)
    <div class="row" style="margin-bottom: 5px;">
        <div class="col-md-1">{{$user->id}}</div>
        <div class="col-md-2">{{$user->name}}</div>
        <div class="col-md-2">{{$user->email}}</div>
        <div class="col-md-1"><a href="{{ url('/admin/edit-user/'.$user->id) }}">Editer</a></div>
        <div class="col-md-1"><a href="#">Commandes</a></div>
        <div class="col-md-1">
            <form name="clearCart" method="POST" action="{{ route('cart.delete') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $user->id }}">
                <input type="hidden" name="_method" value="put">
                <button style="margin: 0 20px;" class="btn btn-xs btn-default"  type="submit" data-toggle="confirmation-singleton">
                    Delogguer/Supprimer le panier
                </button>
            </form>
        </div>
    </div>
@endforeach
<div class="users-pagination">
{{ $users->links() }}
</div>
