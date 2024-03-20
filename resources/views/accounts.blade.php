<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        .table-wrapper {
            overflow-x: auto;
            overflow-y: auto;
            max-height: 75vh;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        th {
            white-space: nowrap;
            text-align: center;
            vertical-align: middle;
            border-right: 1px solid lightgray !important;
        }

        td {
            border-right: 1px solid lightgray !important;
            text-align: center;
            vertical-align: middle;
        }

        .card {
            border-radius: 1.5rem;
        }

        .card-body {
            background-image: url('{{ asset('/images/account.png') }}');
            background-size: cover;
            background-position: center;
            border-radius: 1.5rem;
        }
    </style>
    <title>TicketMaster</title>
</head>

<body>
    <x-header />
    <div class="container">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div class="row">
                <div class="col-md-12 col-md-offset-2">
                    <div class="panel panel-default">
                        <h4 class="h4 panel-heading py-3">All Accounts</h4>

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($accounts as $account)
                                <div class="col">
                                    <div class="card rounded-5">
                                        <div class="card-body rounded-5">
                                            <h5 class="card-title">{{ $account->name }}</h5>
                                            <hr>
                                            <p class="card-text">
                                            <div class="d-flex flex-column align-items-start  justify-content-between">
                                                <div class="row w-100 py-3">
                                                    <div class="col-md-12">
                                                        <div class="d-flex flex-column ">
                                                            <p class="card-text fw-bold ">{{ $account->cardnumber }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row w-100">
                                                    <div class="col-md-6">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="card-title h6 m-0 p-0 text-black-50">CVC</h6>
                                                            <p class="card-text fw-bold ">{{ $account->cvc }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="d-flex flex-column flex-nowrap">
                                                            <h6 class="card-title h6 m-0 p-0 text-black-50">Expiration</h6>
                                                            <p class="card-text fw-bold">
                                                                {{ $account->exp_month }}/{{ $account->exp_year }}
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- <div class="panel-body">
                            <table class="table table-hover ">
                                <thead>
                                    <tr class="bg-dark text-white">
                                        <th>Name</th>
                                        <th>Card Number</th>
                                        <th>CVC</th>
                                        <th>Expiration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($accounts as $account)
                                        <tr>
                                            <td>{{ $account->name }}</td>
                                            <td>{{ $account->cardnumber }}</td>
                                            <td>{{ $account->cvc }}</td>
                                            <td>{{ $account->exp_month }}/{{ $account->exp_year }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
