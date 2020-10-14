@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">{{ __('Insert Item') }}</div>

                <div class="card-body">
                    <form method="POST" action="/insert">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <textarea id="description" placeholder="Description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus></textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="price" placeholder="Price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="dprice" placeholder="Delivery Price" type="text" class="form-control @error('dprice') is-invalid @enderror" name="dprice" value="{{ old('dprice') }}" required autocomplete="dprice" autofocus>

                                @error('dprice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-md-10">
                                <input id="stock" placeholder="Stock" type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}" required autocomplete="stock" autofocus>

                                @error('stock')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0 d-flex justify-content-center">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Insert') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection