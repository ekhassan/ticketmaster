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
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
        }

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
            background-size: cover;
            background-position: center;
            opacity: 0.5;
            z-index: -1;
        }
    </style>

</head>

<body>
    <x-header />
    <div class="container-fluid px-5">

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
