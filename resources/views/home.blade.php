@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5" type="submit" onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
