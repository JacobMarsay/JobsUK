
<h1 class="login-title">Login</h1>
<form class="" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="my-10">
        <label for="email_address">Email:</label>
        <input type="text" name="email_address" id="email_address"/>
    </div>

    <div class="my-10">
        <label for="password">Password:</label>
        <input name="password" id="password"/>
    </div>
    <button type="submit" class="btn btn-blue">Login</button>
</form>
    <p>Don't have an account? <a href="users/registration">SIGN UP</a></p>