<header>

    <h1>Post</h1>

    
    @guest

    <form action="{{ route('register') }}" method="POST">
        
        @method('POST')
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="email">email</label>
        <input type="text" name="email">

        
        <label for="password">password</label>
        <input type="password" name="password">

        <label for="password_confirmation">password Confirmation</label>
        <input type="password" name="password_confirmation">

        <input type="submit" value="REGISTER">

    </form>

    <form action="{{ route('login') }}" method="POST">
        
        @method('POST')
        @csrf

        <label for="email">email</label>
        <input type="text" name="email">

        
        <label for="password">password</label>
        <input type="password" name="password">

        <input type="submit" value="LOGIN ">

    </form>

    @else 

    <h3>Hello {{ Auth::user() -> name }}</h3>
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>

    @endguest
</header>