@extends('layouts.app')

@section('content')
<div class="container">
    @include('helpers.messages')
        <div class="row text-white">
            <div class="col-6">
                <h1>{{__('harnasik.product.add.header')}}</h1>
            </div>
            <div class="col-6 ">
                <a class="float-end" href="{{route('products.create')}}">
                    <button type="button" class="btn btn-primary">Dodaj</button>
                </a>
            </div>

        </div>

        <div>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('harnasik.product.fields.name')}}</th>
                    <th scope="col">{{__('harnasik.product.fields.description')}}</th>
                    <th scope="col">{{__('harnasik.product.fields.amount')}}</th>
                    <th scope="col">{{__('harnasik.product.fields.price')}}</th>
                    <th scope="col">{{__('harnasik.product.fields.category')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)

                    <tr>
                        <th scope="row">{{$product->id }}</th>
                        <td>{{$product->name }}</td>
                        <td>{{$product->description }}</td>
                        <td>{{$product->amount}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name ?? ''}}</td>
                        <td>

                            <a href="{{route('products.show', $product->id)}}">
                                <button class="btn btn-success btn-sm">
                                    {{__('harnasik.button.show')}}
                                </button>
                            </a>

                            <a href="{{route('products.edit', $product->id)}}">
                                <button class="btn btn-primary btn-sm">
                                    {{__('harnasik.button.edit')}}
                                </button>
                            </a>

                            <button class="btn btn-danger btn-sm delete" data-id="{{$product->id}}">
                                X
                            </button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{url('products')}}/";
    const confirmDelete = "{{ __('harnasik.messages.confirm_delete') }}";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
