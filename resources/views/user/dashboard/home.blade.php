@extends('layouts.user.app')

@section('content')
    <h1>Welcome to Your Dashboard {{ auth()->user()->name }}</h1>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection