@extends('admin.admin')

@section('left-column')
    @include('admin.admin-left-column')
@stop

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-color:white; border-style:solid; border-width:1px;">
        <div class="container">
            <h3 class="display-3">Catégories</h3>
            <a class="btn bg-primary" href="{{route('add-category')}}">Ajouter une catégorie</a>
        </div>
    </div> 

    @php $i=0; @endphp
    @foreach ($categories as $category)
        @php $i++; @endphp
        <div class="row" style="margin-bottom: 5px;">
            <div class="col-md-1">{{$i}}</div>
            
            @if ($category->image !== null)
            <div class="col-md-1">
                <img src="{{ url($category->image) }}" class="img-thumbnail" alt="image" width="152" height="118">
            </div>
@endif

            
            <div class="col-md-2">{{$category->name}}</div>
            <div class="col-md-1">{{$category->priority}}</div>
            <div class="col-md-2">{{$category->parent_name}}</div>
            <div class="col-md-1"><a href="{{ url('/admin/edit-category/'.$category->id) }}">éditer</a></div>
            <div class="col-md-1">
                <form method="POST" action="{{ url('/admin/categories/'.$category->id) }}">
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button class="btn btn-xs btn-default"  type="submit" data-toggle="confirmation-singleton">
                        supprimer
                    </button>
                </form>
            </div>
        </div>
    @endforeach

@stop