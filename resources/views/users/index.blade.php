@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">E-mail</th>
            <th scope="col">Imie</th>
            <th scope="col">Nawisko</th>
            <th scope="col">Numer telefonu</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)

            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->phone_number}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
