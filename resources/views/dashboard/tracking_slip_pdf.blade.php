<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tracking Slip of {{ $data->track_id }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"> --}}
    <style type="text/css">
        .fa {
            display: inline;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 1;
            font-family: FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: sans-serif;
        }

        hr {
            border: 1px solid red;
        }

        .hr2 {
            border: 1px solid #104993;
        }
    </style>
</head>

<body>
    <div style="text-align:center">
        <div>
            <img src="{{ asset('/assets/img/logo/new_logo.png') }}" alt="logo" style="text-align:center">
        </div>
        <div class="pt-4">
            <h3 style="color: #104993; font-weight: 800!important; font-size: 3em; font-family: sans-serif;"><span
                    style="color: #d40000;">PASHA</span> ENTERPRISES</h3>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <table class="table table-borderless" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">
                            <p style="color: #104993">
                                <i class="fa fa-headphones" style="color: #d40000"></i> Call Us: <a
                                    style="color: #104993" href="tel:+92-3132062283">+92-3132062283</a>
                            </p>
                        </th>
                        <th scope="col">
                            <p>
                                <i class="far fa-envelope" style="color: #d40000"></i>
                                <a style="color: #104993" href="mailto:info@pashaenterprises.org"
                                    target="_blank">INFO@PASHAENTERPRISES.ORG</a>
                            </p>
                        </th>
                    </tr>
                </thead>
            </table>
        </div>
        <hr>
        <div style="text-align:center">
            <h6 style="color: #104993; font-family: sans-serif;">
                Tracking Number # {{ $data->track_id }}
            </h6>
        </div>
        <hr>
        <div class="d-flex p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" colspan="2">Sender</th>
                        <th scope="col" colspan="2">Receiver</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" colspan="2">{{ $data->sender_name }}</td>
                        <td scope="col" colspan="2">{{ $data->receiver_name }}</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">{{ $data->sender_phone }}</td>
                        <td scope="col" colspan="2">{{ $data->receiver_phone }}</td>
                    </tr>
                    <tr>
                        <td scope="col" colspan="2">{{ $data->sender_address }}</td>
                        <td scope="col" colspan="2">{{ $data->receiver_address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div style="text-align:center">
            <h6 style="color: #104993 ; font-family: sans-serif;">
                INVOICE
            </h6>
        </div>
        <div class="d-flex p-2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Goods</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Weight</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col">{{ $data->goods_name }}</td>
                        <td scope="col">{{ $data->qty }}</td>
                        <td scope="col">{{ $data->weight }} </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr class="hr2">
        <div class="col-12">
            <div class="row">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 100px;"><img src="data:image/png;base64, {!! $qrcode !!}"></th>
                            <th scope="col" style="width: 100px;"><P style="margin-top: -100px !important;">Instruction</P></th>
                            <th scope="col"><p style="margin-top: -100px !important;">{{ $data->instruction }}</p></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th></th>
                            <th><P style="margin-top: -50px !important;">Date & Time:</P></th>
                            <th><p style="margin-top: -50px !important;">{{ $data->created_at }}</p></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
