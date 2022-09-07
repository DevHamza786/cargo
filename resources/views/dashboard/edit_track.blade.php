@extends('dashboard.default')

@section('content')
    <div class="container-fluid">
        <!-- Add Order -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Tracking</a></li>
            </ol>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Tracking</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ route('update.track') }}">
                                <div class="form-row">
                                    <div class="form-group col-md-12 pt-2">
                                        <h5 class="card-title pt-6">Basic Information</h5>
                                        <hr>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Id</label>
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <input type="text" name="track_id" id="track_id" class="form-control"
                                            placeholder="Auto Generate" value="{{ $data->track_id }}" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Status</label>
                                        <select name="status" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Tracking Status</option>
                                            <option value="on the way"
                                                {{ $data->status == 'on the way' ? 'selected' : '' }}>On the Way</option>
                                            <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="delivered" {{ $data->status == 'delivered' ? 'selected' : '' }}>
                                                Delivered</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Tracking Type</label>
                                        <select name="type" id="trackingtype" class="form-control default-select"
                                            id="sel1">
                                            <option value="" selected>Select Tracking Type</option>
                                            <option value="domestic" {{ $data->type == 'domestic' ? 'selected' : '' }}>
                                                Domestic</option>
                                            <option value="international"
                                                {{ $data->type == 'international' ? 'selected' : '' }}>International
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12" id="trackingmode" style="display: none;">
                                        <label>Tracking Mode</label>
                                        <select name="mode" id="tracking_mode" class="form-control default-select">
                                            <option value="" selected>Select Tracking Mode</option>
                                            <option value="Import" {{ $data->mode == 'Import' ? 'selected' : '' }}>Import
                                            </option>
                                            <option value="Export" {{ $data->mode == 'Export' ? 'selected' : '' }}>Export
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mark Order Number (MON)</label>
                                        <input type="text" name="mon" class="form-control"
                                            placeholder="Enter the Mark Order Number" value="{{ $data->mon }}">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Goods Type</label>
                                        <select name="good_type" class="form-control default-select" id="sel1">
                                            <option value="" selected>Select Goods Type</option>
                                            <option value="Normal" {{ $data->good_type == 'Normal' ? 'selected' : '' }}>Normal</option>
                                            <option value="Documents" {{ $data->good_type == 'Documents' ? 'selected' : '' }}>Documents</option>
                                            <option value="Special" {{ $data->good_type == 'Special' ? 'selected' : '' }}>Special</option>
                                            <option value="Sensitive" {{ $data->good_type == 'Sensitive' ? 'selected' : '' }}>Sensitive</option>
                                            <option value="Battery In" {{ $data->good_type == 'Battery In' ? 'selected' : '' }}>Battery In</option>
                                            <option value="Battery Out" {{ $data->good_type == 'Battery Out' ? 'selected' : '' }}>Battery Out</option>
                                            <option value="All Battery" {{ $data->good_type == 'All Battery' ? 'selected' : '' }}>All Battery</option>
                                            <option value="Sensitive Cargo" {{ $data->good_type == 'Sensitive Cargo' ? 'selected' : '' }}>Sensitive Cargo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Goods Name </label>
                                        <input type="text" name="goods_name" class="form-control"
                                            placeholder="Enter the Goods Name" value="{{ $data->goods_name }}">
                                    </div>
                                    {{-- for tracking mode --}}
                                    <div class="form-group col-md-6" id="hscode" style="display: none;">
                                        <label>HS-Code</label>
                                        <input name="hs_code" type="text" class="form-control"
                                            placeholder="Please enter the hs-code" value="{{ $data->hs_code }}">
                                    </div>
                                    <div class="form-group col-md-6" id="clearing_charges" style="display: none;">
                                        <label>Clearing Charges </label>
                                        <input type="number" name="clearing_charges" class="form-control"
                                            placeholder="Enter the Clearing Charges " min="1" step="any" value="{{ $data->clearing_charges }}">
                                    </div>
                                    <div class="form-group col-md-6" id="custome_duties" style="display: none;">
                                        <label>Custom Duties </label>
                                        <input type="number" name="custome_duties" class="form-control"
                                            placeholder="Enter the Custom Duties " min="1" step="any" value="{{ $data->custome_duties }}">
                                    </div>
                                    {{-- end for tracking mode --}}
                                    <div class="form-group col-md-6">
                                        <label>Quantity of Item </label>
                                        <input type="number" name="qty" class="form-control"
                                            placeholder="Enter the Quantity of Item " min="1" step="any"  value="{{ $data->qty }}">
                                    </div>
                                    {{-- for tracking mode --}}
                                    <div class="form-group col-md-6" id="actual_weight" style="display: none" >
                                        <label>Actual Weight </label>
                                        <input type="number" name="weight" class="form-control"
                                            placeholder="Enter the Actual Weight " min="1" step="any" value="{{ $data->weight }}">
                                    </div>
                                    <div class="form-group col-md-6" id="volumetric_weight" style="display: none">
                                        <label>Volumetric Weight </label>
                                        <input type="number" name="volumetric_weight" class="form-control"
                                            placeholder="Enter the Volumetric Weight " min="1" step="any" value="{{ $data->volumetric_weight }}">
                                    </div>
                                    {{-- end for tracking mode --}}
                                    <div class="form-group col-md-6">
                                        <label>Total Weight </label>
                                        <input type="number" name="weight" class="form-control"
                                            placeholder="Enter the Total Weight" min="1" step="any" value="{{ $data->weight }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No. of Cartons </label>
                                        <input type="number" name="cartons" class="form-control"
                                            placeholder="Enter the No. of Cartons" min="1" step="any" value="{{ $data->cartons }}">
                                    </div>
                                    <div class="form-group col-md-6" id="invoice_value" style="display: none;">
                                        <label>Invoice Value </label>
                                        <input type="number" name="invoice_value" class="form-control"
                                            placeholder="Enter the Invoice Value" min="1" step="any" value="{{ $data->invoice_value }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Delivery Type</label>
                                        <select name="delivery_type" class="form-control default-select">
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="C.O.D" {{ $data->delivery_type == 'C.O.D' ? 'selected' : '' }}>C.O.D</option>
                                            <option value="Over Night" {{ $data->delivery_type == 'Over Night' ? 'selected' : '' }}>Over Night</option>
                                            <option value="Detain" {{ $data->delivery_type == 'Detain' ? 'selected' : '' }}>Detain</option>
                                            <option value="Overland" {{ $data->delivery_type == 'Overland' ? 'selected' : '' }}>Overland</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6" id="exportdeltype" style="display: none;">
                                        <label>Delivery Type</label>
                                        <select name="delivery_type" id="exportdeltype"
                                            class="form-control default-select">
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="Cargo" {{ $data->delivery_type == 'Cargo' ? 'selected' : '' }}>Cargo</option>
                                            <option value="Courier" {{ $data->delivery_type == 'Courier' ? 'selected' : '' }}>Courier</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6" id="exportmodeship" style="display:none;">
                                        <label> Mode of Shipment</label>
                                        <select name="mode_shipment" id="exportmodeship"
                                            class="form-control default-select" style="display: none;">
                                            <option value="" selected>Select Delivery Type</option>
                                            <option value="Air" {{ $data->mode_shipment == 'Air' ? 'selected' : '' }}>Air</option>
                                            <option value="Sea" {{ $data->mode_shipment == 'Sea' ? 'selected' : '' }}>Sea</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Delivery Charges </label>
                                        <input type="number" name="charges" class="form-control"
                                            placeholder="Enter the Delivery Charges" min="1" step="any" value="{{ $data->charger }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Insurance </label>
                                        <input type="text" name="insurance" class="form-control"
                                            placeholder="Enter the Insurance" value="{{ $data->insurance }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Item Price </label>
                                        <input type="number" name="item_price" class="form-control"
                                            placeholder="Enter the Item Price" min="1" step="any" value="{{ $data->item_price }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Instruction </label>
                                        <input type="text" name="instruction" class="form-control"
                                            placeholder="Enter the Instruction"  value="{{ $data->instruction }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Source of Tracking </label>
                                        <input type="text" name="source" class="form-control"
                                            placeholder="Enter the tracking source" value="{{ $data->source }}">

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
                                            placeholder="Please enter the sender name" value="{{ $data->sender_name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Name</label>
                                        <input name="receiver_name" type="text" class="form-control"
                                            placeholder="Please enter the receiver name" value="{{ $data->receiver_name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender Type</label>
                                        <select name="sender_type" id="sendertype" class="form-control default-select"
                                            id="sel2">
                                            <option value="" selected>Select Sender Type</option>
                                            <option value="client" {{ $data->sender_type == 'client' ? 'selected' : '' }}>Client</option>
                                            <option value="company" {{ $data->sender_type == 'company' ? 'selected' : '' }}>Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Type</label>
                                        <select name="receiver_type" id="receivertype"
                                            class="form-control default-select" id="sel2">
                                            <option value="" selected>Select Receiver Type</option>
                                            <option value="client" {{ $data->receiver_type == 'client' ? 'selected' : '' }}>Client</option>
                                            <option value="company" {{ $data->receiver_type == 'company' ? 'selected' : '' }}>Company</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input name="sender_email" type="text" class="form-control"
                                            placeholder="Please enter the sender email" value="{{ $data->sender_email }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input name="receiver_email" type="text" class="form-control"
                                            placeholder="Please enter the receiver email" value="{{ $data->receiver_email }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input name="sender_phone" type="tel" class="form-control"
                                            placeholder="Please enter the sender phone" value="{{ $data->sender_phone }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone</label>
                                        <input name="receiver_phone" type="tel" class="form-control"
                                            placeholder="Please enter the receover phone" value="{{ $data->receiver_phone }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Province</label>
                                        <input name="sender_Province" type="text" class="form-control"
                                            placeholder="Please enter the sender Province" value="{{ $data->sender_Province }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Province</label>
                                        <input name="receiver_Province" type="text" class="form-control"
                                            placeholder="Please enter the receiver Province" value="{{ $data->receiver_Province }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input name="sender_city" type="tel" class="form-control"
                                            placeholder="Please enter the sender city" value="{{ $data->sender_city }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input name="receiver_city" type="tel" class="form-control"
                                            placeholder="Please enter the receiver city" value="{{ $data->receiver_city }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input name="sender_area" type="text" class="form-control"
                                            placeholder="Please enter the sender area" value="{{ $data->sender_area }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Area</label>
                                        <input name="receiver_area" type="text" class="form-control"
                                            placeholder="Please enter the receiver area" value="{{ $data->receiver_area }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input name="sender_country" type="text" class="form-control"
                                            placeholder="Please enter the sender country" value="{{ $data->sender_country }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input name="receiver_country" type="text" class="form-control"
                                            placeholder="Please enter the receiver country" value="{{ $data->receiver_country }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender Address</label>
                                        <input name="sender_address" type="text" class="form-control"
                                            placeholder="Please enter the sender address" value="{{ $data->sender_address }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver Address</label>
                                        <input name="receiver_address" type="text" class="form-control"
                                            placeholder="Please enter the receiver address" value="{{ $data->receiver_address }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sender CNIC (IND)</label>
                                        <input name="sender_cnic" type="number" class="form-control"
                                            placeholder="Please enter the sender cnic" min="1" step="any"  value="{{ $data->sender_cnic }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Receiver CNIC (IND)</label>
                                        <input name="receiver_cnic" type="number" class="form-control"
                                            placeholder="Please enter the receiver cnic" min="1" step="any" value="{{ $data->receiver_cnic }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-row" id="sendercompany" style="display: none;">
                                            <div class="form-group col-md-6">
                                                <label>Sender Company NTN</label>
                                                <input name="sender_company_ntn" type="number" class="form-control"
                                                    placeholder="Please enter the sender company ntn" min="1"
                                                    step="any" value="{{ $data->sender_company_ntn }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Sender Company REG# (PVT LTD OR MNC) </label>
                                                <input name="sender_company_reg" type="number" class="form-control"
                                                    placeholder="Please enter the sender company reg" min="1"
                                                    step="any"  value="{{ $data->sender_company_reg }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-row" id="receivercompany" style="display: none;">
                                            <div class="form-group col-md-6">
                                                <label>Receiver Company NTN</label>
                                                <input name="receiver_company_ntn" type="number" class="form-control"
                                                    placeholder="Please enter the receiver company ntn" min="1"
                                                    step="any" value="{{ $data->receiver_company_ntn }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Receiver Company REG# (PVT LTD OR MNC) </label>
                                                <input name="receiver_company_reg" type="number" class="form-control"
                                                    placeholder="Please enter the receiver company reg" min="1"
                                                    step="any"  value="{{ $data->receiver_company_ntn }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
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
        $(function() {

            var trackingType = $('#trackingtype :selected').val();
            var trackingMode = $('#tracking_mode').val();

            // Type
            if (trackingType == 'international') {
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

            // Mode
            if (trackingMode == 'Export') {

                $("#exportdeltype").show();
                $("#exportmodeship").show();
                $("#hscode").show();
                $("#actual_weight").show();
                $("#volumetric_weight").show();
                $("#invoice_value").show();

            }
            if (trackingMode == 'Import') {

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
                if (this.value == 'Export') {

                    $("#exportdeltype").show();
                    $("#exportmodeship").show();
                    $("#hscode").show();
                    $("#actual_weight").show();
                    $("#volumetric_weight").show();
                    $("#invoice_value").show();

                }
                if (this.value == 'Import') {

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
