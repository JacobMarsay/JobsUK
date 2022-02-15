
<h1 class="login-title">Login</h1>
<form class="" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="my-10">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"/>
    </div>

    <div class="my-10">
        <label for="password">Password:</label>
        <input name="password" id="password"/>
    </div>
    <button type="submit" class="btn btn-blue">Login</button>
</form>
    <p>Don't have an account? <a href="users/registration">SIGN UP</a></p>