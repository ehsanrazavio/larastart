@extends('layouts.public.app')

@section('content')
    <form method="POST" action="{{ route('register') }}">
    @csrf
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

@endsection