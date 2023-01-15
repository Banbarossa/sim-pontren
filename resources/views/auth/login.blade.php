@extends('layouts.login-template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row shadow rounded overflow-hidden">
                <div class="col-6 d-flex align-items-center justify-content-center" style="background-image:url({{ asset('images/1.jpg') }});background-size: cover; background-position: center;rgba(0, 0, 0, 0.5)">
                    <div class="bg-secondary rounded-pill text-center">
                        <div class="text-white px-5 py-3">
                            PESANTREN  ISLAM
                            <H1 class="text-white">AR RABWAH</H1>
                        </div>
                    </div>

                </div>
                <div class="col-6 my-5">
                    <div>
                        <div class="py-3 text-center">
                            <h2 class="text-muted">Login</h2>
                            <small>Selamat datang di sistem Manajemen Ar Rabwah</small>
                            <hr>
                        </div>
        
                        <div class="card-body py">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="email" class="text-md-end">{{ __('Email Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    
                                    <div class="col-md-12">
                                        <label for="password" class=" text-md-end">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mt-5">
                                    <div class="col d-flex justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-secondary px-5">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                      
        
                                        {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
 

        </div>
    </div>
</div>
@endsection
