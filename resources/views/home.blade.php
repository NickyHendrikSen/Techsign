@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach($items as $item)
            <div class="card" style="margin-bottom: 10px;">
                <div class="card-body">
                    <h5 class="card-title">{{$item->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Rp. {{$item->price}}</h6>
                    <p class="card-text">{{$item->description}}</p>
                    <form class="card-link" action="/delete/{{ $item->id }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            {{ __('Delete') }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection