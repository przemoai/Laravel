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
                    <aside class="col-lg-9">
                        <div class="col-6">
                            <h1><i class="bi bi-list"></i> {{__('harnasik.product.cart.header')}} ({{ $cart->getItems()->count() }})</h1>
                        </div>
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-borderless table-shopping-cart">
                                    <thead class="text-muted">
                                    <tr class="small text-uppercase">
                                        <th scope="col">Product</th>
                                        <th scope="col" width="120">Quantity</th>
                                        <th scope="col" width="120">Price</th>
                                        <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        @foreach($cart->getItems() as $item)
                                        <tr>
                                            <td>
                                                <figure class="itemside align-items-center">
                                                    <div class="aside"><img src="{{ $item->getImage() }}" class="img-sm"></div>
                                                    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">{{$item->getProductName()}}</a>
                                                        <p class="text-muted small">SIZE: L <br> Brand: MAXTRA</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
{{--                                                <select class="form-control">--}}
{{--                                                    <option>1</option>--}}
{{--                                                    <option>2</option>--}}
{{--                                                    <option>3</option>--}}
{{--                                                    <option>4</option>--}}
{{--                                                </select> </td>--}}
                                            {{$item->getQuantity()}}
                                            <td>
                                                <div class="price-wrap"> <var class="price">{{$item->getSum()}}</var> <small class="text-muted"> Cena za sztuke: {{$item->getProductPrice()}} zł</small> </div>
                                            </td>
                                            <td class="text-right d-none d-md-block">
                                                <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-heart"></i></a>
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
                    <aside class="col-lg-3">
                        <div class="card mb-3">
                            <div class="card-body">
                                <form>
                                    <div class="form-group"> <label>Have coupon?</label>
                                        <div class="input-group"> <input type="text" class="form-control coupon" name="" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <dl class="dlist-align">
                                    <dt>Total price:</dt>
                                    <dd class="text-right ml-3">$69.97</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Discount:</dt>
                                    <dd class="text-right text-danger ml-3">- $10.00</dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt>Total: </dt>
                                    <dd class="text-right text-dark b ml-3"><strong> {{ $cart->getSum() }}</strong></dd>
                                </dl>
                                <hr>
                                <a href="" class="btn btn-out btn-primary btn-square btn-main" data-abc="true"> Make Purchase </a>
                                <a href="/" class="btn btn-out btn-success btn-square btn-main mt-2" data-abc="true">Continue Shopping</a>
                            </div>
                        </div>
                    </aside>
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
