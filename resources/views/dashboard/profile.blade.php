{{-- Extends layout --}}
@extends('dashboard.default')

{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Account Setting</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="profile-tab">
                      <div class="custom-tab-1">
                        <ul class="nav nav-tabs">
                          <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link active">Setting</a>
                          </li>
                        </ul>
                        <div class="tab-content">
                          <div id="profile-settings" class="tab-pane fade active show">
                            <div class="pt-3">
                              <div class="settings-form">
                                @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                        <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                    </svg>
                                    <strong>Error! </strong>{{ session('error') }}
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                  </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polyline points="9 11 12 14 22 4"></polyline>
                                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                        </svg>
                                        <strong>Success! </strong>
                                            {{ session('success') }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                            class="mdi mdi-close"></i></span>
                                        </button>
                                    </div>
                                @endif
                                @if($errors)
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error! </strong>{{ $error }}
                                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                        </button>
                                      </div>
                                    @endforeach
                                @endif
                                <form method="POST" action="{{ route('change.Password') }}">
                                    @csrf
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>Email</label>
                                      <input type="email" placeholder="Email" class="form-control" value="{{ auth()->user()->email }}" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Current Password</label>
                                      <input type="password" name="current-password" placeholder="Password" class="form-control {{ $errors->has('current-password') ? ' is-invalid' : '' }}">
                                    </div>
                                  </div>

                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                      <label>New Password</label>
                                      <input id="new-password" type="password" class="form-control {{ $errors->has('new-password') ? ' is-invalid' : '' }}" name="new-password" required placeholder="New Password">

                                    </div>
                                    <div class="form-group col-md-6">
                                      <label>Confirm New Password</label>
                                      <input id="new-password_confirmation" type="password" class="form-control {{ $errors->has('new-password_confirmation') ? ' is-invalid' : '' }}" name="new-password_confirmation" required placeholder="Confirm New Password">

                                    </div>
                                  </div>
                                  <button class="btn btn-primary" type="submit">Update</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
