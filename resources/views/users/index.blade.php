@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('harnasik.user.email')}}</th>
            <th scope="col">{{__('harnasik.user.first_name')}}</th>
            <th scope="col">{{__('harnasik.user.last_name')}}</th>
            <th scope="col">{{__('harnasik.user.phone')}}</th>
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
                    <button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">
                        X
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
