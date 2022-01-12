@extends('layouts.app')

@section('content')

<div class="container">
    @include('helpers.messages')
    <div class="row text-black">
        <div class="col-6">
            <h1><i class="bi bi-people-fill"></i> {{__('harnasik.user.title')}}</h1>
        </div>


    </div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('harnasik.user.email')}}</th>
            <th scope="col">{{__('harnasik.user.first_name')}}</th>
            <th scope="col">{{__('harnasik.user.last_name')}}</th>
            <th scope="col">{{__('harnasik.user.phone')}}</th>
            <th scope="col"></th>
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
                <td>
                    <button class="btn btn-danger delete" data-id="{{$user->id}}">
                        <i class="bi bi-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
@endsection
@section('javascript')
    const deleteUrl = "{{url('users')}}/";
    const confirmDelete = "{{ __('harnasik.messages.confirm_delete') }}" ;
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
