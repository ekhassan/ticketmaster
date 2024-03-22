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
        body {
            background-color: hsla(262, 100%, 80%, 0.3);
            background-image:
                radial-gradient(at 71% 58%, hsla(69, 86%, 73%, 0.5) 0px, transparent 50%),
                radial-gradient(at 96% 88%, hsla(22, 99%, 68%, 0.5) 0px, transparent 50%),
                radial-gradient(at 56% 53%, hsla(292, 85%, 75%, 0.5) 0px, transparent 50%),
                radial-gradient(at 46% 46%, hsla(270, 89%, 70%, 0.5) 0px, transparent 50%),
                radial-gradient(at 90% 59%, hsla(6, 82%, 72%, 0.5) 0px, transparent 50%),
                radial-gradient(at 9% 22%, hsla(239, 68%, 62%, 0.5) 0px, transparent 50%),
                radial-gradient(at 42% 15%, hsla(103, 99%, 70%, 0.5) 0px, transparent 50%);
        }

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
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

        .card-body {
            background-image: url('{{ asset('/images/mask.png') }}');
            background-size: cover;
            background-position: center;
            border-radius: 1.5rem;
        }
    </style>
    <title>TicketMaster</title>
</head>

<body>
    <x-header />
    <div class="container-fluid px-5">
        <div class="d-flex align-items-center justify-content-center p-5">
            <div class="row">
                <div class="col-md-12 col-md-offset-2">
                    <div class="panel panel-default">
                        <h4 class="h4 panel-heading py-3">All Accounts</h4>

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach ($accounts as $account)
                                <div class="col">
                                    <div class="card bg-dark rounded-5 border-0">
                                        <div class="card-body text-white rounded-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title">{{ $account->name }}</h5>
                                                <img src="{{ asset('/images/chip.svg') }}" class="img-fluid"
                                                    alt="chip" style="width: 12%">
                                            </div>
                                            <hr>
                                            <p class="card-text">
                                            <div class="d-flex flex-column align-items-start justify-content-between">
                                                <div class="row w-100 py-3">
                                                    <div class="col-md-12">
                                                        <div class="d-flex flex-column ">
                                                            <p class="card-text fw-bold ">{{ $account->cardnumber }}</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-between w-100">
                                                    <div class="">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="card-title h6 m-0 p-0 text-white-50">CVC</h6>
                                                            <p class="card-text fw-bold ">{{ $account->cvc }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex flex-column flex-nowrap">
                                                            <h6 class="card-title h6 m-0 p-0 text-white-50">Expiration
                                                            </h6>
                                                            <p class="card-text fw-bold">
                                                                {{ $account->exp_month }}/{{ $account->exp_year }}
                                                        </div>
                                                    </div>
                                                    <div class="">
                                                        <div class="d-flex align-content-center justify-content-end">
                                                            <img src="{{ asset('/images/nfc.svg') }}" class="img-fluid"
                                                                alt="chip">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
