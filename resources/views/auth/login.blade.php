
<h1 class="login-title">Login</h1>
<form class="" action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="my-10">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="my-10">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-blue">Login</button>
</form>
    <p>Don't have an account? <a href="users/registration">SIGN UP</a></p>