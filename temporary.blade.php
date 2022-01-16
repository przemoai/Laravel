<div class="cart-section">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
                <th style="width:50%">{{__('harnasik.product.fields.name')}}</th>
                <th style="width:10%">{{__('harnasik.product.fields.price')}}</th>
                <th style="width:8%">{{__('harnasik.product.fields.amount')}}</th>
                <th scope="col" width="120">{{__('harnasik.product.fields.totalPrice')}}</th>
                <th style="width:22%" class="text-center"></th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cart->getItems() as $item)
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                <a href="{{route('products.show', $item->getProductId())}}" class="title text-dark" data-abc="true">
                                    <img src="{{ $item->getImage() }}" alt="..." class="img-responsive"/>
                                </a>
                            </div>
                            <div class="col-sm-10">
                                <a href="{{route('products.show', $item->getProductId())}}" class="title text-dark" data-abc="true">
                                    {{$item->getProductName()}}
                                </a>

                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$item->getProductPrice()}}</td>
                    <td data-th="Quantity">
                        {{$item->getQuantity()}}
                    </td>
                    <td data-th="Subtotal" class="text-center">{{$item->getSum()}}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger  delete" data-id="{{$item->getProductId()}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>{{$item->getSum()}}</strong></td>
            </tr>
            <tr>
                <td><a href="{{route('products.show', $item->getProductId())}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Total {{$cart->getSum()}}</strong></td>
                <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>
