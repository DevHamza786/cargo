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
                        <button type="button" class="btn btn-rounded btn-info"
                            style="background: #104993 !important; border: #104993 !important;">
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
                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor"
                                    stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2">
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
                        <button type="button" id="trackingIDs" class="btn light btn-info m-1" data-toggle="modal"
                            data-target="#exampleModalCenter">Tracking Status Update <span class="btn-icon-right"><i
                                    class="fa fa-plus color-info"></i></span>
                        </button>
                        <button type="button" id="trackingSlip" class="btn light btn-warning m-1">Download Slip <span
                                class="btn-icon-right"><i class="fa fa-download color-warning"></i></span>
                        </button>
                        <a href="{{ route('template') }}" class="btn light btn-info m-1">Template <span
                                class="btn-icon-right"><i class="fa fa-download color-warning"></i></span>
                        </a>
                        <button type="button" id="trackingExcel" class="btn light btn-warning m-1">Download Tracking<span
                                class="btn-icon-right"><i class="fa fa-download color-warning"></i></span>
                        </button>
                        <div class="table-responsive" style="padding-top: 20px;">
                            <table id="example-4" class="display min-w850">
                                <thead>
                                    <tr>
                                        <th><input id="check_all" type="checkbox"></th>
                                        <th>Tracking ID</th>
                                        <th>Type</th>
                                        <th>M.O.N</th>
                                        <th>Sender Name</th>
                                        <th>Sender Phone</th>
                                        <th>Recevier Name</th>
                                        <th>Recevier Phone</th>
                                        <th>Sender Country</th>
                                        <th>Recevier Country</th>
                                        <th>Tracking Status</th>
                                        <th>Created By</th>
                                        <th>Created Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $track)
                                        <tr>
                                            <td><input type="checkbox" name="row-check" value="{{ $track->id }}"></td>
                                            <td>{{ $track->track_id }}</td>
                                            <td>{{ $track->type }}</td>
                                            <td>{{ $track->mon }}</td>
                                            <td>{{ $track->sender_name }}</td>
                                            <td>{{ $track->sender_phone }}</td>
                                            <td>{{ $track->receiver_name }}</td>
                                            <td>{{ $track->receiver_phone }}</td>
                                            <td>{{ $track->sender_country }}</td>
                                            <td>{{ $track->receiver_country }}</td>
                                            <td>
                                                <span
                                                    class="badge light
                                                    @if ($track->status == 'pending') badge-warning
                                                    @elseif($track->status == 'on the way')
                                                        badge-danger
                                                    @elseif($track->status == 'shipping')
                                                        badge-danger
                                                    @elseif($track->status == 'delivered')
                                                        badge-success @endif">
                                                    {{ $track->status }}
                                                </span>
                                            </td>
                                            <td>{{ $track->user->name ?? '' }}</td>
                                            <td>{{ $track->created_at->format('d/m/Y') }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('edit.track', $track->id) }}"
                                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                            class="fa fa-trash"></i></a>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tracking Status Update</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Tracking Status</label>
                                <select id="trackingStatus" name="status" class="form-control default-select" required>
                                    <option value="" selected>Select Tracking Status</option>
                                    <option value="on the way">On the Way</option>
                                    <option value="pending">Pending</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="trackID">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page.script')
    <script src="{{ asset('vendor/toastr/js/toastr.min.js') }}" type="text/javascript"></script>
    <script src=" {{ asset('js/plugins-init/toastr-init.js') }}" type="text/javascript"></script>
    <script>
        // For PDF Download
        $("#trackingSlip").click(function() {
            var trackingSlip = [];
            $.each($("input:checkbox[name='row-check']:checked"), function() {
                trackingSlip.push($(this).val());
            });
            if (trackingSlip.length === 0) {
                toastr.error("Please! First Select Tracking for slip download.", "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            } else {

                $.ajax({
                    type: 'GET',
                    url: "{{ route('slip.pdf') }}",
                    data: {
                        trackingID: trackingSlip,
                    },
                    success: function(data) {
                        console.log('hamnza')
                    }
                });
            }
        });

        // For Tracking Excel
        $("#trackingExcel").click(function() {
            var trackingExcel = [];
            $.each($("input:checkbox[name='row-check']:checked"), function() {
                trackingExcel.push($(this).val());
            });
            if (trackingExcel.length === 0) {
                toastr.error("Please! First Select Tracking for download.", "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            } else {

                $.ajax({
                    type: 'GET',
                    url: "{{ route('tracking.excel') }}",
                    data: {
                        trackingID: trackingExcel,
                    },
                    success: function(d) {
                        var a = document.createElement("a");
                        a.download = "filename.xlsx";
                        a.href = "data:application/vnd.ms-excel," + encodeURI(d);
                        document.body.appendChild(a);
                        a.click();
                    }
                });
            }
        });
        // Get Tracking ID
        $("#trackID").click(function() {
            var selectedTracking = [];
            $.each($("input:checkbox[name='row-check']:checked"), function() {
                selectedTracking.push($(this).val());
            });
            if (selectedTracking.length === 0) {
                toastr.error("Please! First Select Tracking for status update.", "Error", {
                    positionClass: "toast-top-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                })
            } else {
                var status = $('#trackingStatus').val();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('update.trackStatus') }}",
                    data: {
                        trackingID: selectedTracking,
                        status: status
                    },
                    success: function(data) {
                        if (data.success) {
                            toastr.success(data.success, "Success", {
                                timeOut: 3000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                            //For wait 5 seconds
                            setTimeout(function() {
                                location.reload(); //Refresh page
                            }, 3000);
                        } else {
                            toastr.error(data.success, "Error", {
                                timeOut: 3000,
                                closeButton: !0,
                                debug: !1,
                                newestOnTop: !0,
                                progressBar: !0,
                                preventDuplicates: !0,
                                onclick: null,
                                showDuration: "300",
                                hideDuration: "1000",
                                extendedTimeOut: "1000",
                                showEasing: "swing",
                                hideEasing: "linear",
                                showMethod: "fadeIn",
                                hideMethod: "fadeOut",
                                tapToDismiss: !1
                            })
                        }
                    }
                });
            }
        });

        // For All CheckBox
        $("#check_all").on("click", function() {
            if ($("input:checkbox").prop("checked")) {
                $("input:checkbox[name='row-check']").prop("checked", true);
            } else {
                $("input:checkbox[name='row-check']").prop("checked", false);
            }
        });

        // Check each table row checkbox
        $("input:checkbox[name='row-check']").on("change", function() {
            var total_check_boxes = $("input:checkbox[name='row-check']").length;
            var total_checked_boxes = $("input:checkbox[name='row-check']:checked").length;

            // If all checked manually then check check_all checkbox
            if (total_check_boxes === total_checked_boxes) {
                $("#check_all").prop("checked", true);
            } else {
                $("#check_all").prop("checked", false);
            }
        });
    </script>
@endsection
