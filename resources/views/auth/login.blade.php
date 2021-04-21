@extends('layouts.auth',['title' => 'Login'])

@section('content')
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="/login" method="post">
            @csrf
    
                <div class="form-group">
                    <label for="text">Username</label>
                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror">
                    @error('username')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-block btn-primary">Login</button>

                <div class="text-center mt-3">
                    Don't have account ? <a href="/register">Register</a>
                </div>
            </form>
           
        </div>
    </div>
@endsection