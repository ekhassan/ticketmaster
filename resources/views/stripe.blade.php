<!DOCTYPE html>
<html>

<head>
    <title>Stripe</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <style>
        .card-body {

            position: relative;
            z-index: 1;

        }

        .card-body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ asset('/images/card-bg.jpg') }}');
            background-size: cover;
            background-position: center;
            opacity: 0.5;
            z-index: -1;
        }
    </style>

</head>

<body>
    <x-header />
    <div class="container">

        <div class="d-flex align-items-center justify-content-center vh-100 ">
            <div class="row" style="margin-top: -50px">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h3 class="card-title h3">Add Bank Account</h3>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <form action="/accountAdd" method="post" class="w-100">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label fw-semibold" for="cardName">Name on Card</label>
                                    <input type="text"
                                        class="form-control rounded-pill bg-transparent border border-primary fw-semibold"
                                        id="cardName" name="cardName" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="form-label fw-semibold" for="cardNum">Card Number</label>
                                    <input type="text"
                                        class="form-control rounded-pill bg-transparent border border-primary fw-semibold"
                                        id="cardNum" name="cardNum" required>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4 form-group">
                                        <label class="form-label fw-semibold" for="cvc">CVC</label>
                                        <input type="text"
                                            class="form-control rounded-pill bg-transparent border border-primary fw-semibold"
                                            id="cvc" name="cvc" placeholder="ex. 311" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="form-label fw-semibold" for="expMonth">Expiration Month</label>
                                        <input type="text"
                                            class="form-control rounded-pill bg-transparent border border-primary fw-semibold"
                                            id="expMonth" name="expMonth" placeholder="MM" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label class="form-label fw-semibold" for="expYear">Expiration Year</label>
                                        <input type="text"
                                            class="form-control rounded-pill bg-transparent border border-primary fw-semibold"
                                            id="expYear" name="expYear" placeholder="YYYY" required>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="card-footer">
                            <div class="form-group my-2">
                                <button type="submit"
                                    class="btn btn-primary btn-block float-end px-5 rounded-pill fw-semibold">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</body>

</html>
