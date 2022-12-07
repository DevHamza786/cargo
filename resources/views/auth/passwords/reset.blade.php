{{-- Extends layout --}}
@extends('dashboard.fullwidth')

{{-- Content --}}
@section('content')
<div class="col-md-6">
  <div class="authincation-content">
    <div class="row no-gutters">
      <div class="col-xl-12">
        <div class="auth-form">
            <div class="text-center mb-3">
              <a href="{!! url('/'); !!}"><img src="{{ asset('assets/img/logo/white_logo.png') }}" alt=""></a>
            </div>
            <h4 class="text-center mb-4 text-white">{{ __('Reset Password') }}</h4>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <div class="form-group">
                    <label class="text-white"><strong>Email</strong></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="text-white"><strong>{{ __('Password') }}</strong></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">

                    <label class="text-white"><strong>{{ __('Confirm Password') }}</strong></label>


                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-white text-primary btn-block mt-4">{{ __('Reset Password') }}</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
