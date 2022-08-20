{{-- Extends layout --}}
@extends('dashboard.default')



{{-- Content --}}
@section('content')
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tracking</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tracking Collection</h4>
                        <button type="button" class="btn btn-rounded btn-info" style="background: #104993 !important; border: #104993 !important;">
                            <a href="{{ route('create.track') }}" class="text-white">
                                <span class="btn-icon-left text-info">
                                    <i class="fa fa-plus color-info" style="color: #104993 !important;"></i>
                                </span>Add
                            </a>
                        </button>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show">
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <strong>Success!</strong>
                                    {{ session('success') }}
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                    class="mdi mdi-close"></i></span>
                                </button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="example-4" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Tracking Type</th>
                                        <th>Customer Name</th>
                                        <th>Customer Type</th>
                                        <th>Origin Country</th>
                                        <th>Destination Country</th>
                                        <th>Tracking Status</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $track)
                                        <tr>
                                            <td>{{ $track->track_id }}</td>
                                            <td>{{ $track->type }}</td>
                                            <td>{{ $track->customer_name }}</td>
                                            <td>{{ $track->customer_type }}</td>
                                            <td>{{ $track->origin_country }}</td>
                                            <td>{{ $track->Destination_country }}</td>
                                            <td>
                                                <span class="badge light
                                                    @if ($track->status == 'pending')
                                                        badge-warning
                                                    @elseif($track->status == 'on the way')
                                                        badge-danger
                                                    @elseif($track->status == 'shipping')
                                                        badge-danger
                                                    @elseif($track->status == 'delivered')
                                                        badge-success
                                                    @endif">
                                                    {{ $track->status }}
                                                </span>
                                            </td>
                                            <td>{{ $track->user->name ?? '' }}</td>
                                            <td>{{ $track->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                  <a href="{{ route('edit.track', $track->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                  <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                </div>
                                              </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
