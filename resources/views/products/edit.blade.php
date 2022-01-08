@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('tlumaczenie.product.edit.title')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update',$product->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('tlumaczenie.product.fields.name')}}</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="255" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="justify-content-center">
                                @if(!is_null($product->image_path))
                                    <img src="{{asset('storage/'.$product->image_path)}}" class="img-responsive img-fluid img-thumbnail" alt="image">
                                @else
                                    <img src="{{asset('storage/products/photonull.png')}}" class="img-responsive img-fluid img-thumbnail" alt="image">
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">

                            <label for="image" class="col-md-4 col-form-label text-md-right">{{__('tlumaczenie.product.fields.image')}}</label>

                            <div class="col-md-6">
                                <input id="image"  type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{__('tlumaczenie.product.fields.description')}}</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1000" class="form-control @error('description') is-invalid @enderror" name="description">
                                    {{$product->description}}
                                </textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{__('tlumaczenie.product.fields.amount')}}</label>

                            <div class="col-md-6">
                                <input id="amount" min="0" type="number" class="form-control @error('phone_number') is-invalid @enderror" name="amount" value="{{ $product->amount }}" required autocomplete="amount">

                                @error('amount')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{__('tlumaczenie.product.fields.price')}}</label>

                            <div class="col-md-6">
                                <input id="price" step="0.01" min="0" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" required autocomplete="price">

                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{__('tlumaczenie.button.save_changes')}}
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
