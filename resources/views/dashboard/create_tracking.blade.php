@extends('dashboard.default')

@section('content')
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Create Tracking</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create New Tracking</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('store.track') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Tracking Id</label>
                                        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                                        <input type="text" name="track_id" id="track_id" class="form-control"
                                            placeholder="Auto Generate" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Type</label>
                                        <select name="type" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Tracking Type</option>
                                            <option value="domestic">Domestic</option>
                                            <option value="international">International</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Status</label>
                                        <select name="status" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Tracking Status</option>
                                            <option value="on the way">On the Way</option>
                                            <option value="pending">Pending</option>
                                            <option value="delivered">Delivered</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tracking Mode</label>
                                        <select name="mode" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Tracking Mode</option>
                                            <option value="Import">Import</option>
                                            <option value="Export">Export</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tracking Detail</label>
                                        <input type="text" name="detail" class="form-control" placeholder="Tracking By">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>HS-Code</label>
                                        <input name="hs_code" type="text" class="form-control"
                                            placeholder="Please enter the hs-code">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Item</label>
                                        <input name="item" type="text" class="form-control"
                                            placeholder="Please enter the item">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Name</label>
                                        <input name="customer_name" type="text" class="form-control"
                                            placeholder="Please enter the customer name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Type</label>
                                        <select name="customer_type" class="form-control default-select" id="sel2">
                                            <option value="" selected>Select Customer Type</option>
                                            <option value="client">Client</option>
                                            <option value="company">Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Email</label>
                                        <input name="customer_email" type="text" class="form-control"
                                            placeholder="Please enter the customer email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Customer Phone</label>
                                        <input name="customer_phone" type="tel" class="form-control"
                                            placeholder="Please enter the customer phone">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Customer CNIC (IND)</label>
                                        <input name="customer_cnic" type="number" class="form-control"
                                            placeholder="Please enter the customer cnic">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>COMPANY NTN</label>
                                        <input name="company_ntn" type="number" class="form-control"
                                            placeholder="Please enter the company ntn">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Company REG# (PVT LTD OR MNC) </label>
                                        <input name="company_reg" type="number" class="form-control"
                                            placeholder="Please enter the company reg">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Consignee Details</label>
                                        <input name="consignee" type="text" class="form-control"
                                            placeholder="Please enter the consignee details">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Shipper Details</label>
                                        <input name="shipper" type="text" class="form-control"
                                            placeholder="Please enter the shipper details">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Vendor Name </label>
                                        <input name="vender" type="text" class="form-control"
                                            placeholder="Please enter the vender name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Name</label>
                                        <input name="receiver_name" type="text" class="form-control"
                                            placeholder="Please enter the receiver name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Phone</label>
                                        <input name="receiver_phone" type="tel" class="form-control"
                                            placeholder="Please enter the receiver phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Origin Country</label>
                                        <input name="origin_country" type="text" class="form-control"
                                            placeholder="Please enter the origin country">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Destination Country</label>
                                        <input name="Destination_country" type="text" class="form-control"
                                            placeholder="Please enter the destination country">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page.script')
    <script>
        $(document).ready(function() {
            function trackingID() {
                var text = "";
                var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

                for (var i = 0; i < 10; i++)
                    text += possible.charAt(Math.floor(Math.random() * possible.length));
                    $('#track_id').val('PE-'+text);
                return text;
            }

            console.log(trackingID());
        });
    </script>
@endsection
