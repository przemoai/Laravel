@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodawanie produktu</div>

                <div class="card-body">


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="255" type="text" class="form-control " name="name" value="{{ old('name') }}" disabled>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1000" class="form-control " name="description" value={{ old('description') }} disabled>

                                </textarea>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">Ilość</label>

                            <div class="col-md-6">
                                <input id="amount" min="1" type="number" class="form-control " name="amount" value="{{ old('amount') }}" disabled>


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Cena</label>

                            <div class="col-md-6">
                                <input id="price" step="0.01" min="0" type="number" class="form-control " name="price" value="{{ old('price') }}" disabled>


                            </div>
                        </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
