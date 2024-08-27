@section('title', $title)
@extends('layouts.profile')
@section('message')
    @if (session('message'))
        <div class="success-message alert alert-success main-content d-flex align-items-center" role="alert" style="font-weight: 600; border-radius: 0; padding: 0 94px;">
            <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 0.4em" width="1.1em" height="1.1em" viewBox="0 0 24 24">
                <path fill="#0D5C63" d="m10.6 16.6l7.05-7.05l-1.4-1.4l-5.65 5.65l-2.85-2.85l-1.4 1.4zM12 22q-2.075 0-3.9-.788t-3.175-2.137q-1.35-1.35-2.137-3.175T2 12q0-2.075.788-3.9t2.137-3.175q1.35-1.35 3.175-2.137T12 2q2.075 0 3.9.788t3.175 2.137q1.35 1.35 2.138 3.175T22 12q0 2.075-.788 3.9t-2.137 3.175q-1.35 1.35-3.175 2.138T12 22"/>
            </svg>
            {{ session('message') }}
        </div>
    @endif
@endsection
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@section('content')
    <table class="table table-bordered my-3">
        <thead >
            <tr>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">ID</th>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">First Name</th>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">Last Name</th>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">Email</th>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">Phone Number</th>
                <th scope="col" style="background-color: #F3F9F9 !important; text-align: center;">Role</th>
            </tr>
        </thead>
        <tbody>

                @foreach ($users as $u)
                <tr>
                    <td style="text-align: center">{{$u->id}}</td>
                    <td>{{$u->first_name}}</td>
                    <td>{{$u->last_name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->phone_number}}</td>
                    <td style="text-align: center">{{$u->role->name}}</td>
                </tr>
                @endforeach

        </tbody>
    </table>

@endsection
