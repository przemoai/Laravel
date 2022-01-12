@extends('layouts.app')

@section('content')
<div class="container">
    @include('helpers.messages')
        <div class="row text-black">
            <div class="col-6">
                <h1><i class="bi bi-list"></i> {{__('harnasik.product.add.header')}}</h1>
            </div>
            <div class="col-6 ">
                <a class="float-end" href="{{route('products.create')}}">
                    <button type="button" class="btn btn-primary"><i class="bi bi-plus-square"> </i>   {{__('harnasik.product.add.button')}}</button>
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
                    <th scope="col"></th>

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

                                <button class="btn btn-success ">
{{--                                    {{__('harnasik.button.show')}}--}}
                                    <i class="bi bi-search"></i>
                                </button>
                            </a>

                            <a href="{{route('products.edit', $product->id)}}">
                                <button class="btn btn-primary ">
{{--                                    {{__('harnasik.button.edit')}}--}}
                                    <i class="bi bi-pencil-square"></i>

                                </button>
                            </a>

                            <button class="btn btn-danger  delete" data-id="{{$product->id}}">
                                <i class="bi bi-trash"></i>
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
