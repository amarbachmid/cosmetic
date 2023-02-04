@extends('admin.starter.main')
@section('login')
<br>
<br>
<div class="row justify-content-center">
    <div class="btn btn-dark col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center"><font face="algerian">Registrasi Form</font></h1>
            <form action="/regis" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name')is-invalid @enderror" name="name" placeholder="Name" required value="{{ old('name') }}" autocomplete="off">
                    @error('name')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username')is-invalid @enderror" name="username" placeholder="username" required value="{{ old('username') }}" autocomplete="off">
                    @error('username')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" placeholder="email" required value="{{ old('email') }}" autocomplete="off">
                    @error('email')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" name="password" placeholder="Password" required>
                    @error('password')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-50 btn btn-outline-primary mt-2" type="submit"><font face="algerian">Register</font></button>
            </form>
            <small class="d-block text-center mt-3"><font face="algerian">Already registered? <a href="/login">Login</a> </font> </small>
        
        </main>
    </div>
</div>

@endsection