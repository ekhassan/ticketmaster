<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
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
            text-align: start;
            vertical-align: middle;
        }

        tr {
            background: rgba(255, 255, 255, 0.2) !important; // Make sure this color has an opacity of less than 1
            backdrop-filter: blur(8px) !important; // This be the blur
        }
    </style>
    <title>TicketMaster</title>
</head>

<body>
    <x-header />
    <div class="container-fluid px-5">
        <div class="mt-1">
            <div class="d-flex flex-row my-2">
                <div class="d-flex align-items-center justify-content-between my-3 w-100">
                    <h4 class="h4">New Events</h4>
                    @php
                        $totalMinPrice = 0;
                    @endphp
                    @foreach ($events as $event)
                        @php
                            $totalMinPrice += $event->min_price;
                        @endphp
                    @endforeach
                    {{-- <a href="/stripe/{{$totalMinPrice}}" class="btn btn-success p-2 mx-2" style="border-radius: 5px; text-decoration:none; align-self:center;">Buy All Tickets</a> --}}
                    <div class="d-flex align-items-center justify-content-center">
                        <form class="d-flex">
                            <input
                                class="form-control me-2 border border-success rounded-pill fw-semibold bg-transparent "
                                type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success rounded-pill fw-semibold"
                                type="submit">Search</button>
                        </form>
                        <button type="button" class="btn btn-danger mx-2 rounded-pill fw-semibold" data-toggle="modal"
                            data-target="#selectAccountModal">
                            Buy All Tickets
                        </button>
                    </div>
                </div>
                {{-- Select  Account Modal --}}
                <div class="modal fade" id="selectAccountModal" tabindex="-1" role="dialog"
                    aria-labelledby="selectAccountModalLabel">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h4 class="modal-title" id="selectAccountModalLabel">Select Account</h4>
                            </div>
                            <div class="modal-body">
                                <form id="selectAccountForm">
                                    <div class="form-group">
                                        <label for="accountSelect" class="form-label fw-semibold">Choose
                                            Account:</label>
                                        <select class="form-control rounded-pill fw-semibold" id="accountSelect">
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}" class="fw-semibold">
                                                    {{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-pill fw-semibold px-4"
                                    data-dismiss="modal">Close</button>
                                <button class="btn btn-success rounded-pill fw-semibold px-4" type="submit"
                                    id="applyButton">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="table-responsive text-nowrap bg-transparent " style="max-height: 70vh">
                <table class="table table-bordered table-hover" >
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Id</th>
                            <th>Name</th>
                            <th>Locale</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Public Sale</th>
                            <th>Partner PreSale</th>
                            <th>Group PreSale</th>
                            <th>Start Date</th>
                            <th>TimeZone</th>
                            <th>Status</th>
                            <th>Segment</th>
                            <th>Genre</th>
                            <th>Sub Genre</th>
                            <th>Currency</th>
                            <th>Price</th>
                            <th>Venue</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr style="backdrop-filter: blur(50px) saturate(0.6) !important; ">
                                <td>{{ $event->ticketId }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->locale }}</td>
                                <td>{{ $event->type }}</td>
                                <td><img src="{{ $event->image }}" class=" rounded-3" style="width:150px; height:80px;"
                                        alt="Event image">
                                </td>
                                <td>
                                    @if ($event->public_sales_end_time && $event->public_sales_start_time)
                                        <span class="fw-bold">Start: </span> {{ $event->public_sales_start_time }} <br>
                                        <span class="fw-bold">End: </span> {{ $event->public_sales_end_time }}
                                    @else
                                        N.A
                                    @endif
                                </td>
                                <td>
                                    @if ($event->partner_presale_start_time && $event->partner_presale_end_time)
                                        <span class="fw-bold">Start: </span> {{ $event->partner_presale_start_time }}
                                        <br>
                                        <span class="fw-bold">End: </span> {{ $event->partner_presale_end_time }}
                                    @else
                                        N.A
                                    @endif
                                </td>
                                <td>
                                    @if ($event->group_presale_start_time && $event->group_presale_end_time)
                                        <span class="fw-bold">Start: </span> {{ $event->group_presale_start_time }}
                                        <br>
                                        <span class="fw-bold">End: </span> {{ $event->group_presale_end_time }}
                                    @else
                                        N.A
                                    @endif
                                </td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->time_zone }}</td>
                                <td class="text-danger fw-bold">
                                    <h5 class="h5">{{ $event->status }}</h5>
                                </td>
                                <td>
                                    <span class="fw-bold">ID: </span>{{ $event->segment_id }}<br>
                                    <span class="fw-bold">Name: </span>{{ $event->segment_name }}
                                </td>
                                <td>
                                    <span class="fw-bold">ID: </span>{{ $event->genre_id }} <br>
                                    <span class="fw-bold">Name: </span>{{ $event->genre_name }}
                                </td>
                                <td>
                                    <span class="fw-bold">ID: </span>{{ $event->subgenre_id }} <br>
                                    <span class="fw-bold">Name: </span>{{ $event->subgenre_name }}
                                </td>
                                <td>
                                    {{ $event->currency }}
                                </td>
                                <td>
                                    @if ($event->min_price && $event->max_price)
                                        <span class="fw-bold">Min: </span>{{ $event->min_price }} <br>
                                        <span class="fw-bold">Max: </span>{{ $event->max_price }}
                                    @else
                                        N.A
                                    @endif
                                </td>
                                <td style="width: 150px">
                                    {{-- <span class="fw-bold">ID: </span>{{ $event->venue_id }} <br> --}}
                                    <span class="fw-bold">Venue: </span>{{ $event->venue }} <br>
                                    {{-- <span class="fw-bold">Locale: </span>{{ $event->venue_locale }} <br> --}}
                                    {{-- <span class="fw-bold">Time Zone: </span>{{ $event->venue_time_zone }} <br> --}}
                                    <span class="fw-bold">Country: </span>{{ $event->venue_country }} <br>
                                    <span class="fw-bold">City: </span>{{ $event->venue_city }} <br>
                                    <span class="fw-bold">Postal Code: </span>{{ $event->venue_postal_code }}
                                </td>
                                <td>
                                    <a href="{{ route('newEvents.buy', ['id' => $event->id]) }}"
                                        class="btn btn-primary rounded-pill fw-semibold px-5"
                                        style="border-radius: 5px; text-decoration:none">Buy</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end mt-3">
                {!! $events->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('#applyButton').on('click', function() {
            // Get the selected account name from the select dropdown
            var selectedAccountName = $('#accountSelect option:selected').text();
            // Set the selected account name in the receipt modal
            $('#reciept').find('.selected-account').text(selectedAccountName);
        });
    });

    // Quantity Adder
    $(document).ready(function() {
        $('.btn-minus').click(function() {
            var input = $('#quantity');
            var currentValue = parseInt(input.val());
            if (currentValue > 0) {
                input.val(currentValue - 1);
            }
        });

        $('.btn-plus').click(function() {
            var input = $('#quantity');
            var currentValue = parseInt(input.val());
            if (currentValue < 100) {
                input.val(currentValue + 1);
            }
        });
        $('#quantity').on('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });

    document.getElementById('applyButton').addEventListener('click', function() {
        var selectedAccountId = document.getElementById('accountSelect').value;
        window.location.href = "{{ route('checkout') }}?account_id=" + selectedAccountId;
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Quantity addition and subtraction
        var minusButtons = document.querySelectorAll('.btn-minus');
        var plusButtons = document.querySelectorAll('.btn-plus');

        minusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = button.nextElementSibling;
                var currentValue = parseInt(input.value);
                if (currentValue > 0) {
                    input.value = currentValue - 1;
                    enablePlusButton(button);
                }
            });
        });

        plusButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = button.previousElementSibling;
                var currentValue = parseInt(input.value);
                var availableTickets = parseInt(button.parentElement.previousElementSibling
                    .textContent);
                if (currentValue < availableTickets) {
                    input.value = currentValue + 1;
                    if (currentValue + 1 === availableTickets) {
                        disablePlusButton(button);
                    }
                }
            });
        });

        var minusButtons2 = document.querySelectorAll('.btn-minus');
        var plusButtons2 = document.querySelectorAll('.btn-plus');

        minusButtons2.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = button.nextElementSibling;
                var currentValue = parseInt(input.value);
                if (currentValue > 0) {
                    input.value = currentValue - 1;
                    enablePlusButton(button);
                }
            });
        });

        plusButtons2.forEach(function(button) {
            button.addEventListener('click', function() {
                var input = button.previousElementSibling;
                var currentValue = parseInt(input.value);
                var availableTickets = parseInt(button.parentElement.previousElementSibling
                    .textContent);
                if (currentValue < availableTickets) {
                    input.value = currentValue + 1;
                    if (currentValue + 1 === availableTickets) {
                        disablePlusButton(button);
                    }
                }
            });
        });

        // Update selected account in receipt modal
        var applyButton = document.getElementById('applyButton');
        applyButton.addEventListener('click', function() {
            var selectedAccount = document.getElementById('accountSelect').value;
            var receiptAccount = document.querySelector('#reciept .selected-account');
            receiptAccount.textContent = selectedAccount;
        });

        // Function to disable the plus button
        function disablePlusButton(button) {
            button.disabled = true;
        }

        // Function to enable the plus button
        function enablePlusButton(button) {
            button.disabled = false;
        }
    });
    document.getElementById('applyButton').addEventListener('click', function() {
        var accountId = document.getElementById('accountSelect').value;
        fetch('/submit-credentials', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    accountId: accountId
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>

</html>
