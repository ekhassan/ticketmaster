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
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>TicketMaster</title>

    <style>
        .account {
            border-radius: 1.5rem;
        }

        .account-body {
            background-image: url('{{ asset('/images/mask.png') }}');
            background-size: cover;
            background-position: center;
            border-radius: 1.5rem;
        }
    </style>

</head>

<body>
    <x-header />
    <div class="container-fluid px-5">
        <div class="d-flex align-items-start justify-content-center vh-100 py-3">
            <div class="row w-100">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h5 class="h5">Event List</h5>
                        </div>
                        <div class="vh-100 overflow-auto">
                            <div class="card-body">
                                @foreach ($newEvents as $newEvent)
                                    <div class="event  alert alert-primary rounded-3 p-3 mb-3">
                                        <div class="row gx-5">

                                            <div class="col-4">
                                                <div class="event-img">
                                                    <img src="{{ $newEvent->image }}" class=" rounded-3"
                                                        style="width:150px; height:80px;" alt="Event image">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="event-detail">
                                                    <div class="fw-bold text-turncate">
                                                        {{ $newEvent->name }}
                                                    </div>
                                                    <div
                                                        class="d-flex flex-column  align-items-start justify-content-start">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between fw-semibold">
                                                            <span class="px-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                                                    <path
                                                                        d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                                </svg>
                                                            </span>
                                                            <p class="p-0 m-0 text-truncate ">
                                                                {{ $newEvent->venue_city }}</p>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-center fw-semibold">
                                                            <span class="px-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-clock" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                                                    <path
                                                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                                                                </svg>
                                                            </span>
                                                            <p class="p-0 m-0">
                                                                {{ date('H:i', strtotime($newEvent->start_date)) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="start-date text-truncate">
                                                    <div
                                                        class="d-flex flex-column  align-items-start justify-content-center p-1">
                                                        <p class="p-0 m-0 fw-bold">
                                                            {{ date('F d, Y', strtotime($newEvent->start_date)) }}
                                                        </p>
                                                        <div>
                                                            <label for="quantity"
                                                                class="form-label fw-semibold">Quantity</label>
                                                            <input type="number" name="quantity" id=""
                                                                class="form-control w-50 bg-transparent border border-primary border-2 rounded-pill"
                                                                min="0" value='1' autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-header bg-dark text-white">
                            <h5 class="h5">Account Details</h5>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form>
                                @foreach ($accounts as $account)
                                    @if ($account->id == request('account_id'))
                                        <div class="card account bg-dark rounded-5 border-0">
                                            <div class="card-body account-body text-white rounded-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h5 class="card-title">{{ $account->name }}</h5>
                                                    <img src="{{ asset('/images/chip.svg') }}" class="img-fluid"
                                                        alt="chip" style="width: 12%">
                                                </div>
                                                <hr>
                                                <p class="card-text">
                                                <div
                                                    class="d-flex flex-column align-items-start justify-content-between">
                                                    <div class="row w-100 py-3">
                                                        <div class="col-md-12">
                                                            <div class="d-flex flex-column ">
                                                                <p class="card-text fw-bold ">
                                                                    {{ $account->cardnumber }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-flex align-items-center justify-content-between w-100">
                                                        <div class="">
                                                            <div class="d-flex flex-column ">
                                                                <h6 class="card-title h6 m-0 p-0 text-white-50">CVC
                                                                </h6>
                                                                <p class="card-text fw-bold ">{{ $account->cvc }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div class="d-flex flex-column flex-nowrap">
                                                                <h6 class="card-title h6 m-0 p-0 text-white-50">
                                                                    Expiration
                                                                </h6>
                                                                <p class="card-text fw-bold">
                                                                    {{ $account->exp_month }}/{{ $account->exp_year }}
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <div
                                                                class="d-flex align-content-center justify-content-end">
                                                                <img src="{{ asset('/images/nfc.svg') }}"
                                                                    class="img-fluid" alt="chip">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    </p>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                            </form>
                        </div>
                        {{-- <div class="card-footer">
                            <div class="float-end">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <a href="javascript:history.back()"
                                        class="btn btn-secondary fw-semibold px-3 rounded-pill m-1">Back</a>
                                    <a href="/checkout" class="btn btn-primary fw-semibold px-3 rounded-pill">Pay</a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-dark text-white">
                            <h5 class="h5">Purchase Summary</h5>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            <form>
                                {{-- <div class="card"> --}}

                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-12">
                                            @foreach ($accounts as $account)
                                                @if ($account->id == request('account_id'))
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <span class="p-0 m-0 fw-bold">Name: </span>
                                                        <p class="p-0 m-0 fw-semibold">{{ $account->name }}</p>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="p-0 m-0 fw-bold">Total Tickets: </span>
                                                <p class="p-0 m-0 fw-semibold">{{ $newEventsCount }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- </div> --}}
                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="float-end">
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <a href="javascript:history.back()"
                                        class="btn btn-secondary fw-semibold px-3 rounded-pill m-1">Back</a>
                                    <button type="submit"
                                        class="btn btn-primary fw-semibold px-3 rounded-pill">Pay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
