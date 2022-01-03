@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row text-white">
            <div class="col-6">
                <h1>Lista Produktów</h1>
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
                    <th scope="col">Nazwa</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Ilość</th>
                    <th scope="col">Cena</th>
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
                        <td>

                            <a href="{{route('products.show', $product->id)}}">
                                <button class="btn btn-success btn-sm">
                                    PODGLAD
                                </button>
                            </a>

                            <a href="{{route('products.edit', $product->id)}}">
                                <button class="btn btn-primary btn-sm">
                                    EDYCJA
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
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
