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
                                    <div class="form-group col-md-12 pt-2">
                                        <h5 class="card-title pt-6">Basic Information</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Id</label>
                                        <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                                        <input type="text" name="track_id" id="track_id" class="form-control"
                                            placeholder="Auto Generate" readonly>
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
                                    <div class="form-group col-md-4">
                                        <label>Tracking Type</label>
                                        <select name="type" id="trackingtype" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Tracking Type</option>
                                            <option value="domestic">Domestic</option>
                                            <option value="international">International</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12" id="trackingmode" style="display: none;">
                                        <label>Tracking Mode</label>
                                        <select name="mode" id="tracking_mode" class="form-control default-select" >
                                            <option value="" selected>Select Tracking Mode</option>
                                            <option value="Import">Import</option>
                                            <option value="Export">Export</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mark Order Number (MON)</label>
                                        <input type="text" name="mon" class="form-control" placeholder="Enter the Mark Order Number">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Goods Type</label>
                                        <select name="good_type" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Goods Type</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Documents">Documents</option>
                                            <option value="Special">Special</option>
                                            <option value="Sensitive">Sensitive</option>
                                            <option value="Battery In">Battery In</option>
                                            <option value="Battery Out">Battery Out</option>
                                            <option value="All Battery">All Battery</option>
                                            <option value="Sensitive Cargo">Sensitive Cargo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Goods Name </label>
                                        <input type="text" name="goods_name" class="form-control" placeholder="Enter the Goods Name">
                                    </div>
                                    {{-- for tracking mode --}}
                                    <div class="form-group col-md-6" id="hscode" style="display: none;">
                                        <label>HS-Code</label>
                                        <input name="hs_code" type="text" class="form-control"
                                            placeholder="Please enter the hs-code">
                                    </div>
                                    <div class="form-group col-md-6" id="clearing_charges" style="display: none;">
                                        <label>Clearing Charges </label>
                                        <input type="number" name="clearing_charges" class="form-control" placeholder="Enter the Clearing Charges " min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6" id="custome_duties" style="display: none;">
                                        <label>Custom Duties </label>
                                        <input type="number" name="custome_duties" class="form-control" placeholder="Enter the Custom Duties " min="1" step="any">
                                    </div>
                                    {{-- end for tracking mode --}}
                                    <div class="form-group col-md-6">
                                        <label>Quantity of Item </label>
                                        <input type="number" name="qty" class="form-control" placeholder="Enter the Quantity of Item " min="1" step="any">
                                    </div>
                                    {{-- for tracking mode --}}
                                    <div class="form-group col-md-6" id="actual_weight" style="display: none">
                                        <label>Actual Weight </label>
                                        <input type="number" name="weight" class="form-control" placeholder="Enter the Actual Weight " min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6" id="volumetric_weight" style="display: none">
                                        <label>Volumetric Weight </label>
                                        <input type="number" name="volumetric_weight" class="form-control" placeholder="Enter the Volumetric Weight " min="1" step="any">
                                    </div>
                                    {{--end for tracking mode --}}
                                    <div class="form-group col-md-6">
                                        <label>Total Weight </label>
                                        <input type="number" name="weight" class="form-control" placeholder="Enter the Total Weight" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No. of Cartons </label>
                                        <input type="number" name="cartons" class="form-control" placeholder="Enter the No. of Cartons" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6" id="invoice_value" style="display: none;">
                                        <label>Invoice Value </label>
                                        <input type="number" name="invoice_value" class="form-control" placeholder="Enter the Invoice Value" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Delivery Type</label>
                                        <select name="delivery_type" class="form-control default-select" >
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="C.O.D">C.O.D</option>
                                            <option value="Over Night">Over Night</option>
                                            <option value="Detain">Detain</option>
                                            <option value="Overland">Overland</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6" id="exportdeltype" style="display: none;">
                                        <label>Delivery Type</label>
                                        <select name="delivery_type" id="exportdeltype" class="form-control default-select">
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="Cargo">Cargo</option>
                                            <option value="Courier">Courier</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6" id="exportmodeship" style="display:none;">
                                        <label> Mode of Shipment</label>
                                        <select name="mode_shipment" id="exportmodeship" class="form-control default-select" style="display: none;">
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="Air">Air</option>
                                            <option value="Sea">Sea</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Delivery Charges </label>
                                        <input type="number" name="charges" class="form-control" placeholder="Enter the Delivery Charges" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Insurance </label>
                                        <input type="text" name="insurance" class="form-control" placeholder="Enter the Insurance">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Item Price </label>
                                        <input type="number" name="item_price" class="form-control" placeholder="Enter the Item Price" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Instruction </label>
                                        <input type="text" name="instruction" class="form-control" placeholder="Enter the Instruction">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Source of Tracking </label>
                                        <input type="text" name="source" class="form-control" placeholder="Enter the tracking source">

                                    </div>
                                    <div class="form-group col-md-6 pt-4">
                                        <h5 class="card-title pt-6">Sender Information</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6 pt-4">
                                        <h5 class="card-title pt-6">Receiver Information</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input name="sender_name" type="text" class="form-control"
                                            placeholder="Please enter the sender name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input name="receiver_name" type="text" class="form-control"
                                            placeholder="Please enter the receiver name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender Type</label>
                                        <select name="sender_type" id="sendertype" class="form-control default-select" id="sel2">
                                            <option value="" selected>Select Sender Type</option>
                                            <option value="client">Client</option>
                                            <option value="company">Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Type</label>
                                        <select name="receiver_type" id="receivertype" class="form-control default-select" id="sel2">
                                            <option value="" selected>Select Receiver Type</option>
                                            <option value="client">Client</option>
                                            <option value="company">Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input name="sender_email" type="text" class="form-control"
                                            placeholder="Please enter the sender email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input name="receiver_email" type="text" class="form-control"
                                            placeholder="Please enter the receiver email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input name="sender_phone" type="tel" class="form-control"
                                            placeholder="Please enter the sender phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input name="receiver_phone" type="tel" class="form-control"
                                            placeholder="Please enter the receover phone">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Province</label>
                                        <input name="sender_Province" type="text" class="form-control"
                                            placeholder="Please enter the sender Province">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Province</label>
                                        <input name="receiver_Province" type="text" class="form-control"
                                            placeholder="Please enter the receiver Province">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input name="sender_city" type="tel" class="form-control"
                                            placeholder="Please enter the sender city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input name="receiver_city" type="tel" class="form-control"
                                            placeholder="Please enter the receiver city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input name="sender_area" type="text" class="form-control"
                                            placeholder="Please enter the sender area">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input name="receiver_area" type="text" class="form-control"
                                            placeholder="Please enter the receiver area">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input name="sender_country" type="text" class="form-control"
                                            placeholder="Please enter the sender country">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input name="receiver_country" type="text" class="form-control"
                                            placeholder="Please enter the receiver country">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender Address</label>
                                        <input name="sender_address" type="text" class="form-control"
                                            placeholder="Please enter the sender address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Address</label>
                                        <input name="receiver_address" type="text" class="form-control"
                                            placeholder="Please enter the receiver address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender CNIC (IND)</label>
                                        <input name="sender_cnic" type="number" class="form-control"
                                            placeholder="Please enter the sender cnic" min="1" step="any">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver CNIC (IND)</label>
                                        <input name="receiver_cnic" type="number" class="form-control"
                                            placeholder="Please enter the receiver cnic" min="1" step="any">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-row" id="sendercompany" style="display: none;">
                                            <div class="form-group col-md-6">
                                                <label>Sender Company NTN</label>
                                                <input name="sender_company_ntn" type="number" class="form-control"
                                                    placeholder="Please enter the sender company ntn" min="1" step="any">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sender Company REG# (PVT LTD OR MNC) </label>
                                                <input name="sender_company_reg" type="number" class="form-control"
                                                    placeholder="Please enter the sender company reg" min="1" step="any">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-row" id="receivercompany" style="display: none;">
                                            <div class="form-group col-md-6">
                                                <label>Receiver Company NTN</label>
                                                <input name="receiver_company_ntn" type="number" class="form-control"
                                                    placeholder="Please enter the receiver company ntn" min="1" step="any">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Receiver Company REG# (PVT LTD OR MNC) </label>
                                                <input name="receiver_company_reg" type="number" class="form-control"
                                                    placeholder="Please enter the receiver company reg" min="1" step="any">
                                            </div>
                                        </div>
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
                $('#track_id').val('PE-' + text);
                return text;
            }

            console.log(trackingID());
        });

        $(function() {

            $('#sendertype').on('change', function() {

                if (this.value == 'company') {
                    $("#sendercompany").show();
                    $("#receivercompany").hide();
                } else {
                    $("#sendercompany").hide();
                    $("#receivercompany").hide();
                }

            });

            $('#receivertype').on('change', function() {

                if (this.value == 'company') {
                    $("#receivercompany").show();
                    $("#sendercompany").hide();
                } else {
                    $("#receivercompany").hide();
                    $("#sendercompany").hide();
                }

            });

            $('#trackingtype').on('change', function() {
                console.log(this.value)
                if (this.value == 'international') {
                    $("#trackingmode").show();
                } else {
                    $("#trackingmode").hide();
                    $("#exportdeltype").hide();
                    $("#exportmodeship").hide();
                    $("#hscode").hide();
                    $("#actual_weight").hide();
                    $("#volumetric_weight").hide();
                    $("#invoice_value").hide();
                    $("#clearing_charges").hide();
                    $("#custome_duties").hide();
                }

            });

            $('#tracking_mode').on('change', function() {
                console.log(this.value)
                if (this.value == 'Export') {

                    $("#exportdeltype").show();
                    $("#exportmodeship").show();
                    $("#hscode").show();
                    $("#actual_weight").show();
                    $("#volumetric_weight").show();
                    $("#invoice_value").show();

                }if (this.value == 'Import'){

                    $("#exportdeltype").show();
                    $("#exportmodeship").show();
                    $("#hscode").show();
                    $("#actual_weight").show();
                    $("#volumetric_weight").show();
                    $("#invoice_value").show();
                    $("#clearing_charges").show();
                    $("#custome_duties").show();

                } else {

                    $("#exportdeltype").hide();
                    $("#exportmodeship").hide();
                    $("#hscode").hide();
                    $("#actual_weight").hide();
                    $("#volumetric_weight").hide();
                    $("#invoice_value").hide();
                    $("#clearing_charges").hide();
                    $("#custome_duties").hide();
                }

            });
        });
    </script>
@endsection
