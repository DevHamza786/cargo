<table>
    <thead>
    <tr>
        <th>M.o.n</th>
        <th>Status</th>
        <th>Type</th>
        <th>Mode</th>
        <th>Goods Type</th>
        <th>Goods Name</th>
        <th>Hs Code</th>
        <th>Clearing Charges</th>
        <th>Custome Duties</th>
        <th>Qty</th>
        <th>Weight</th>
        <th>Volumetric Weight</th>
        <th>Cartons</th>
        <th>Invoice Value</th>
        <th>Delivery Type</th>
        <th>Mode Shipment</th>
        <th>Charges</th>
        <th>Insurance</th>
        <th>Item Price</th>
        <th>Instruction</th>
        <th>Source</th>
        <th>Sender Name</th>
        <th>Sender Type</th>
        <th>Sender Email</th>
        <th>Sender Phone</th>
        <th>Sender Province</th>
        <th>Sender City</th>
        <th>Sender Area</th>
        <th>Sender Country</th>
        <th>Sender Address</th>
        <th>Sender Cnic</th>
        <th>Sender Company NTN</th>
        <th>Sender Company REG</th>
        <th>Receiver Name</th>
        <th>Receiver Type</th>
        <th>Receiver Email</th>
        <th>Receiver Phone</th>
        <th>Receiver Province</th>
        <th>Receiver City</th>
        <th>Receiver Area</th>
        <th>Receiver Country</th>
        <th>Receiver Address</th>
        <th>Receiver Cnic</th>
        <th>Receiver Company NTN</th>
        <th>Receiver Company REG</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($tracking as $data)
        <tr>
            <td>{{ $data->mom }}</td>
            <td>{{ $data->status }}</td>
            <td>{{ $data->type }}</td>
            <td>{{ $data->mode }}</td>
            <td>{{ $data->good_type }}</td>
            <td>{{ $data->goods_name }}</td>
            <td>{{ $data->hs_code }}</td>
            <td>{{ $data->clearing_charges }}</td>
            <td>{{ $data->custome_duties }}</td>
            <td>{{ $data->qty }}</td>
            <td>{{ $data->weight }}</td>
            <td>{{ $data->volumetric_weight }}</td>
            <td>{{ $data->cartons}}</td>
            <td>{{ $data->invoice_value}}</td>
            <td>{{ $data->delivery_type}}</td>
            <td>{{ $data->mode_shipment}}</td>
            <td>{{ $data->mode_shipment }}</td>
            <td>{{ $data->insurance}}</td>
            <td>{{ $data->item_price}}</td>
            <td>{{ $data->instruction}}</td>
            <td>{{ $data->source}}</td>
            <td>{{ $data->sender_name}}</td>
            <td>{{ $data->sender_type}}</td>
            <td>{{ $data->sender_email}}</td>
            <td>{{ $data->sender_phone}}</td>
            <td>{{ $data->sender_Province}}</td>
            <td>{{ $data->sender_city}}</td>
            <td>{{ $data->sender_area}}</td>
            <td>{{ $data->sender_country}}</td>
            <td>{{ $data->sender_address}}</td>
            <td>{{ $data->sender_cnic}}</td>
            <td>{{ $data->sender_company_ntn}}</td>
            <td>{{ $data->sender_company_reg}}</td>
            <td>{{ $data->receiver_name}}</td>
            <td>{{ $data->receiver_type}}</td>
            <td>{{ $data->receiver_email}}</td>
            <td>{{ $data->receiver_phone}}</td>
            <td>{{ $data->receiver_Province}}</td>
            <td>{{ $data->receiver_city}}</td>
            <td>{{ $data->receiver_area}}</td>
            <td>{{ $data->receiver_country}}</td>
            <td>{{ $data->receiver_address}}</td>
            <td>{{ $data->receiver_cnic}}</td>
            <td>{{ $data->receiver_company_ntn}}</td>
            <td>{{ $data->receiver_company_reg}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
