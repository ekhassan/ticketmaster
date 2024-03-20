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
    <title>Buy Now</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <x-header />
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-center vh-100">
                    <form class="w-75">
                        <div class="card w-100">
                            <div class="card-header bg-dark text-white">
                                <h3 class="h3 card-title">Event Payment</h3>
                            </div>
                            <div class="card-body">
                                <di class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center justify-content-between ">
                                            <h5 class="h5 fw-bold">Event Details</h5>
                                            <span class="badge rounded-pill bg-danger ">
                                                <h6 class="h6"> {{ $event->status }}</h6>
                                            </span>
                                        </div>
                                    </div>
                                </di v>
                                <div class="row fw-semibold">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" for="Name">Event Name: </label>
                                            <input type="text" name="" id=""
                                                value="{{ $event->name }}"
                                                class="form-control fw-semibold text-truncate rounded-pill" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="segment_name" class="form-label fw-semibold">Segment: </label>
                                            <input type="text" name="" id=""
                                                value="{{ $event->segment_name }}"
                                                class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="genre_name" class="form-label">Genre: </label>
                                        <input type="text" name="" id=""
                                            value="{{ $event->genre_name }}"
                                            class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subGenre" class="form-label fw-semibold">Sub genre: </label>
                                        <input type="text" name="" id=""
                                            value="{{ $event->subgenre_name }}"
                                            class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" for="type">Type: </label>
                                            <input type="text" name="" id=""
                                                value="{{ $event->type }}"
                                                class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" for="city">City: </label>
                                            <input type="text" name="" id=""
                                                value="{{ $event->venue_city }}"
                                                class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label fw-semibold" for="country">Country: </label>
                                            <input type="text" name="" id=""
                                                value="{{ $event->venue_country }}"
                                                class="form-control text-truncate fw-semibold rounded-pill" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="float-end">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="price d-flex align-items-center fw-bold px-3">
                                                    <span class="p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                            height="28" fill="currentColor" class="bi bi-coin"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                                                        </svg>
                                                    </span>
                                                    {{ $event->min_price }} - {{ $event->max_price }} $
                                                </div>
                                                <div class="start-date d-flex align-items-center  fw-bold">
                                                    <span class="p-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-calendar2-event" viewBox="0 0 16 16">
                                                            <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"/>
                                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z"/>
                                                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5z"/>
                                                          </svg>
                                                    </span>
                                                    {{ date('F d, Y', strtotime($event->start_date)) }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="h5 fw-bold">Accounts</h5>
                                        <div class="form-group">
                                            <label for="accountSelect" class="form-label fw-semibold">Choose
                                                Account:</label>
                                            <select class="form-control rounded-pill fw-semibold" id="accountSelect">
                                                @foreach ($accounts as $account)
                                                    <option value="{{ $account->id }}">{{ $account->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-end">
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <a href="/"
                                            class="btn btn-secondary fw-semibold px-5 rounded-pill m-1">Back</a>
                                        <button type="submit"
                                            class="btn btn-primary fw-semibold px-5 rounded-pill">Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
