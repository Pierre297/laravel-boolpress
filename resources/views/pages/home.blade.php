@extends('layouts.main-layout')
@section('content')

    @guest
        <div class="register-section">
        <h2 class="register-title">Register to access</h2>
        <form action="{{ route('register') }}" method="POST" class="register">

            @method('POST')
            @csrf

            <label for="name">Name: </label>
            <input type="text" name="name" >
            <label for="email">Email:</label>
            <input type="email" name="email">
            <label for="password">Password: </label>
            <input type="password" name="password">
            <label for="password_confirmation">Password confirmation: </label>
            <input type="password"  name="password_confirmation">
            <br>
            <input type="submit" value="REGISTER" class="register-btn">

        </form>
    </div>
        <hr>        

        <h2>If you are already registered you can access via login</h2>
        <form action="{{ route('login') }}" method="POST">

            @method('POST')
            @csrf

            <label for="email">Email:</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password:</label><br>
            <input type="password" name="password"><br>
            <br>
            <input type="submit" value="LOGIN">

        </form>
        <hr>
    @else
        
        <emps-component></emps-component>
    @endguest

    
@endsection