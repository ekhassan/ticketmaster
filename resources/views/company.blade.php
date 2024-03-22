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

        .card {
            border-radius: 1.5rem;
            /* max-width: 340px; */
            min-height: 13.438rem !important;
            max-height: 13.438rem !important;
        }

        .card-body {
            background-image: url('{{ asset('/images/mask.png') }}');
            background-size: cover;
            background-position: center;
            min-height: 13.438rem !important;
            max-height: 13.438rem !important;
            border-radius: 1.5rem;
            overflow: hidden;
        }
    </style>

</head>

<body>
    <x-header />

    <div class="container-fluid px-5">
        <div class="row vh-100">
            <div class="col-md-12">
                <div class="py-5">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card bg-dark border-0" style="min-height:px ">
                                <a href="/events" class="text-decoration-none ">
                                    <div class="card-body p-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>
                                                <img src="{{ asset('/images/fifa.webp') }}" class="img-fluid w-50"
                                                    alt="fifa">
                                            </span>
                                            <h5 class="h5 fw-bold text-white">
                                                FIFA
                                            </h5>
                                        </div>
                                        <div class="text-center w-100 mt-5 ">
                                            <h5 class="h5">
                                                <a href="https://www.fifa.com/fifaplus/en"
                                                    class="text-white-50 text-decoration-none"
                                                    target="_blank">fifa.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">

                            <div class="card bg-dark border-0" style="min-height:px ">
                                <a href="/events" class="text-decoration-none ">
                                    <div class="card-body p-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>
                                                <img src="{{ asset('/images/eventim.svg') }}" class=" img-fluid w-50"
                                                    alt="eventim">
                                            </span>
                                            <h5 class="h5 fw-bold text-white">
                                                Eventim
                                            </h5>
                                        </div>
                                        <div class="text-center w-100 mt-5 ">
                                            <h5 class="h5">
                                                <a href="https://www.eventim.com/"
                                                    class="text-white-50 text-decoration-none"
                                                    target="_blank">eventim.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-dark border-0">
                                <a href="/events" class="text-decoration-none ">
                                    <div class="card-body p-5">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>
                                                <img src="{{ asset('/images/uefa.svg') }}" class="img-fluid w-100"
                                                    alt="uefa">
                                            </span>
                                            <h5 class="h5 fw-bold text-white">
                                                UEFA
                                            </h5>
                                        </div>
                                        <div class="text-center w-100 mt-5 ">
                                            <h5 class="h5">
                                                <a href="https://www.uefa.com/"
                                                    class="text-white-50 text-decoration-none"
                                                    target="_blank">uefa.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card bg-dark border-0">
                                <a href="/events" class="text-decoration-none ">
                                    <div class="card-body p-5">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <h3 class="h3 text-white">ticketmaster</h3>
                                            <span>
                                                <h5 class="h5 fw-bold text-white">
                                                    Ticketmaster
                                                </h5>
                                            </span>
                                        </div>
                                        <div class="text-center w-100 mt-5 ">
                                            <h5 class="h5">
                                                <a href="https://www.ticketmaster.com/"
                                                    class="text-white-50 text-decoration-none"
                                                    target="_blank">ticketmaster.com</a>
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
