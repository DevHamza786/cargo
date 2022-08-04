{{-- Extends layout --}}
@extends('dashboard.fullwidth')

{{-- Content --}}
@section('content')
<div class="col-md-6">
  <div class="authincation-content">
    <div class="row no-gutters">
      <div class="col-xl-12">
        <div class="auth-form" style="padding: 50px 30px !important;">
            <div class="text-center mb-3">
              <a href="{!! url('/index'); !!}"><img src="{{ asset('assets/img/logo/white_logo.png') }}" alt=""></a>
            </div>
            <h4 class="text-center mb-4 text-white">{{ __('Reset Password') }}</h4>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                <div class="form-group">
                    <label class="text-white"><strong>Email</strong></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="text-center">
                    <button type="submit" class="btn bg-white text-primary btn-block mt-4"> {{ __('Send Password Reset Link') }}</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
