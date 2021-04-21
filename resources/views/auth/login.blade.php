@extends('layouts.auth',['title' => 'Login'])

@section('content')
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="/login" method="post">
            @csrf
    
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
                    @error('email')
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
            </form>
           
        </div>
    </div>
@endsection