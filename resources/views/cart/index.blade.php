@extends('layouts.app')

@section('css-files')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        @include('helpers.messages')
        <div class="cart-section">
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-lg-8">
                        <div class="col-8">
                            <h1><i class="bi bi-list"></i> {{__('harnasik.product.cart.header')}} ({{ $cart->getItems()->count() }})</h1>
                        </div>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                    <tr class="small text-uppercase text-center ">
                                        <th scope="col"></th>
                                        <th scope="col">{{__('harnasik.product.fields.name')}}</th>
                                        <th scope="col" width="120">{{__('harnasik.product.fields.amount')}}</th>
                                        <th scope="col" width="120">{{__('harnasik.product.fields.price')}}</th>
                                        <th scope="col" width="120">{{__('harnasik.product.fields.totalPrice')}}</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        @foreach($cart->getItems() as $item)
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <a href="{{route('products.show', $item->getProductId())}}" class="title text-dark" data-abc="true">
                                                    <div class="aside"><img src="{{ $item->getImage() }}" class="img-sm"></div>
                                                    </a>

                                                </figure>
                                            </td>
                                            <td>
                                                <div class="price-wrap text-center " >
                                                    <a href="{{route('products.show', $item->getProductId())}}" class="title text-dark" data-abc="true">
                                                        {{$item->getProductName()}}
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="price-wrap text-center">
                                                    {{$item->getQuantity()}}
                                                </div>
                                            <td>
                                                <div class="price-wrap text-center">{{$item->getProductPrice()}} zł </div>
                                            </td>
                                            <td>
                                                <div class="price-wrap text-center">{{$item->getSum()}} zł </div>
                                            </td>
                                            <td class="text-right d-none d-md-block">
                                                <button class="btn btn-danger  delete" data-id="{{$item->getProductId()}}">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <aside class="col-lg-8 " >
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total: &nbsp; </dt>
                                    <dd class="text-right text-dark b ml-3"><strong> {{ $cart->getSum() }} zł</strong></dd>
                                </dl>
                                <div class="col-lg-6">
                                    <a href="/" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a>
                                    <a href="/" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{url('cart')}}/";
    const confirmDelete = "{{ __('harnasik.messages.confirm_delete') }}";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
