@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('harnasik.user.edit.title')}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.update',$user->id) }}">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="row mb-3">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{__('harnasik.city.fields.city')}}</label>

                            <div class="col-md-6">
                                <input id="city" maxlength="255" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="" required autocomplete="city" autofocus>

                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="zip_code" class="col-md-4 col-form-label text-md-right">{{__('harnasik.city.fields.zip_code')}}</label>

                            <div class="col-md-6">
                                <input id="zip_code" maxlength="6" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" value="" required autocomplete="zip_code">

                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="street" class="col-md-4 col-form-label text-md-right">{{__('harnasik.city.fields.street')}}</label>

                            <div class="col-md-6">
                                <input id="street" maxlength="255" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="" required autocomplete="street">

                                @error('street')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="home_no" class="col-md-4 col-form-label text-md-right">{{__('harnasik.city.fields.home_no')}}</label>

                            <div class="col-md-6">
                                <input id="home_no" maxlength="255" type="text" class="form-control @error('home_no') is-invalid @enderror" name="home_no" value="" required autocomplete="name">

                                @error('home_no')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{__('harnasik.button.save_changes')}}
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
