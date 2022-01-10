@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('harnasik.product.show.header')}}</div>

                <div class="card-body">


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('harnasik.product.fields.name')}}</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="255" type="text" class="form-control " name="name" value="{{ $product->name }}" disabled>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{__('harnasik.product.fields.image')}}</label>

                            <div class="col-md-6">
                                <div class="justify-content-center">
                                    @if(!is_null($product->image_path))
                                        <img src="{{asset('storage/'.$product->image_path)}}" class="img-responsive img-fluid img-thumbnail" alt="image">
                                    @else
                                        <img src="{{asset('storage/products/photonull.png')}}" class="img-responsive img-fluid img-thumbnail" alt="image">
                                    @endif
                                </div>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{__('harnasik.product.fields.description')}}</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1000" class="form-control " name="description"  disabled>{{ $product->description }}</textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{__('harnasik.product.fields.amount')}}</label>

                            <div class="col-md-6">
                                <input id="amount" min="1" type="number" class="form-control " name="amount" value="{{ $product->amount }}" disabled>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{__('harnasik.product.fields.price')}}</label>

                            <div class="col-md-6">
                                <input id="price" step="0.01" min="0" type="number" class="form-control " name="price" value="{{ $product->price }}" disabled>

                            </div>
                        </div>

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.category') }}</label>

                        <div class="col-md-6">
                            <select id="price" class="form-control" name="category_id" disabled>
                                @if($product->hasCategory())
                                    <option>{{ $product->category->name }}</option>
                                @else
                                    <option>Brak</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
