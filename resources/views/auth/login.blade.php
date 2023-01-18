@extends('layouts.login-template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row shadow rounded overflow-hidden">
                <div class="col-6 d-none d-lg-flex align-items-center justify-content-center" style="background-image:url({{ asset('images/1.jpg') }});background-size: cover; background-position: center;rgba(0, 0, 0, 0.5)">
                    <div class="bg-secondary rounded-pill text-center">
                        <div class="text-white px-5 py-3">
                            PESANTREN  ISLAM
                            <H1 class="text-white">AR RABWAH</H1>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 my-5">
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
        
                                {{-- <div class="row mb-3">
                                    
                                    <div class="col-md-12">
                                        <label for="password" class=" text-md-end">{{ __('Password') }}</label>
                                        <input id="" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="password" class=" text-md-end">{{ __('Password') }}</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" aria-label="Password" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2" onclick="showpassword()">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                            </span>
                                        </div>
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
<script>
    function showpassword(){
        var pass = document.getElementById('password')
        if(pass.type=='password'){
            pass.type='text'
        }else{
            pass.type='password'
        }
    }
</script>
@endsection
