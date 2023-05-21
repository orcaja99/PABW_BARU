@extends('layouts.app')

<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="img/welcome.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="{{ route('login')}}" method="POST">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror form-control-lg" value="{{ old('email') }}" required autocomplete="email" autofocus />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label class="form-label" for="email">{{ __('Email Address') }}</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required autocomplete="current-password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <label class="form-label" for="password">{{ __('Password') }}</label>
            </div>

            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" name='remember' id="remember" {{ old('remember') ? 'checked' : "" }} />
                <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
                </label>
              </div>
              @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-body">Forgot password?</a>
              @endif
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-danger btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? 
                <a href="/register"class="link-danger">Register</a>
              </p>
            </div>

          </form>
        </div>
      </div>
    </div>
</section>