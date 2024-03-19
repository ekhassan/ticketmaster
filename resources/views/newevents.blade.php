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
    </style>
    <title>TicketMaster</title>
</head>

<body>
    <x-header />
    <div class="container">
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
                            <input class="form-control me-2 rounded-pill " type="search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-outline-success rounded-pill " type="submit">Search</button>
                        </form>
                        <button type="button" class="btn btn-danger mx-2 rounded-pill " data-toggle="modal"
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
                                        <label for="accountSelect">Choose Account:</label>
                                        <select class="form-control rounded-pill " id="accountSelect">
                                            @foreach ($accounts as $account)
                                                <option value="{{ $account->id }}">{{ $account->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-pill px-4"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success rounded-pill px-4" id="applyButton"
                                    data-toggle="modal" data-target="#eventTicketModal">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Event Tickets Modal --}}
                <div class="modal fade" id="eventTicketModal" tabindex="-1" role="dialog"
                    aria-labelledby="eventTicketModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h4 class="modal-title" id="selectAccountModalLabel">Select Account</h4>
                            </div>
                            <div class="modal-body">
                                <form id="eventTicketModal">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-wrapper">
                                                <table class="table table-hover">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th>Event Name</th>
                                                            <th>Avaiable Ticket</th>
                                                            <th>Ticket Quantity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Cleveland Cavaliers vs. Phoenix Suns</td>
                                                            <td>05</td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center  justify-content-center">
                                                                    <span
                                                                        class="btn btn-outline-dark rounded-pill px-3 py-1 mx-2 fw-bold btn-minus">
                                                                        - </span>
                                                                    <input
                                                                        class="form-control text-center rounded-pill  w-25"
                                                                        type="text" name="quantity" id="quantity"
                                                                        value="0">
                                                                    <span
                                                                        class="btn btn-outline-dark rounded-pill px-3 py-1 mx-2 fw-bold btn-plus">
                                                                        + </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cleveland Cavaliers vs. Phoenix Suns</td>
                                                            <td>05</td>
                                                            <td>
                                                                <div
                                                                    class="d-flex align-items-center  justify-content-center">
                                                                    <span
                                                                        class="btn btn-outline-dark rounded-pill px-3 py-1 mx-2 fw-bold btn-minuss">
                                                                        - </span>
                                                                    <input
                                                                        class="form-control text-center rounded-pill  w-25"
                                                                        type="text" name="quantity" id="quantity"
                                                                        value="0">
                                                                    <span
                                                                        class="btn btn-outline-dark rounded-pill px-3 py-1 mx-2 fw-bold btn-pluss">
                                                                        + </span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-pill px-4"
                                    data-dismiss="modal">Back</button>
                                <button type="button" class="btn btn-success rounded-pill px-4" id="applyButton"
                                    data-toggle="modal" data-target="#reciept">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Receipt Modal --}}
                <div class="modal fade" id="reciept" tabindex="-1" role="dialog" aria-labelledby="reciept">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h4 class="modal-title" id="reciept">Receipt</h4>
                            </div>
                            <div class="modal-body">
                                <form id="reciept">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="h6">Total Number of Ticket: </h6>
                                                <p class="p">8</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="h6">Total Price:</h6>
                                                <p class="p">Rs. 40,000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-between">
                                                <h6 class="h6">Selected Bank:</h6>
                                                <p class="p selected-account"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-wrapper">
                                                <table class="table table-hover">
                                                    <thead class="table-dark">
                                                        <tr>
                                                            <th>Event Name</th>
                                                            <th>No of Tickets</th>
                                                            <th>Event Price</th>
                                                            <th>Currency</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Cleveland Cavaliers vs. Phoenix Suns</td>
                                                            <td>04</td>
                                                            <td>20</td>
                                                            <td>USD</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cleveland Cavaliers vs. Phoenix Suns</td>
                                                            <td>04</td>
                                                            <td>20</td>
                                                            <td>USD</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary rounded-pill px-4"
                                    data-dismiss="modal">Back</button>
                                <button type="button" class="btn btn-success rounded-pill px-4"
                                    id="applyButton">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-wrapper">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>id</th>
                            <th>Name</th>
                            <th>Locale</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Public Sales Start Time</th>
                            <th>Public Sales End Time</th>
                            <th>Partner PreSale - Start Time</th>
                            <th>Partner PreSale - End Time</th>
                            <th>Group PreSale - Start Time</th>
                            <th>Group PreSale - End Time</th>
                            <th>Start Date</th>
                            <th>TimeZone</th>
                            <th>Status</th>
                            <th>Segment Id</th>
                            <th>Segment Name</th>
                            <th>Genre Id</th>
                            <th>Genre Name</th>
                            <th>SubGenre Id</th>
                            <th>SubGenre Name</th>
                            <th>Currency</th>
                            <th>Min Price</th>
                            <th>Max Price</th>
                            <th>Venue Id</th>
                            <th>Venue</th>
                            <th>Venue Locale</th>
                            <th>Venue TimeZone</th>
                            <th>Venue Country</th>
                            <th>Venue City</th>
                            <th>Venue PostalCode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->ticketId }}</td>
                                <td>{{ $event->name }}</td>
                                <td>{{ $event->locale }}</td>
                                <td>{{ $event->type }}</td>
                                <td><img src="{{ $event->image }}" alt="" style="width: 150px; height: 50px">
                                </td>
                                <td>{{ $event->public_sales_start_time }}</td>
                                <td>{{ $event->public_sales_end_time }}</td>
                                <td>{{ $event->partner_presale_start_time }}</td>
                                <td>{{ $event->partner_presale_end_time }}</td>
                                <td>{{ $event->group_presale_start_time }}</td>
                                <td>{{ $event->group_presale_end_time }}</td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->time_zone }}</td>
                                <td>{{ $event->status }}</td>
                                <td>{{ $event->segment_id }}</td>
                                <td>{{ $event->segment_name }}</td>
                                <td>{{ $event->genre_id }}</td>
                                <td>{{ $event->genre_name }}</td>
                                <td>{{ $event->subgenre_id }}</td>
                                <td>{{ $event->subgenre_name }}</td>
                                <td>{{ $event->currency }}</td>
                                <td>{{ $event->min_price }}</td>
                                <td>{{ $event->max_price }}</td>
                                <td>{{ $event->venue_id }}</td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->venue_locale }}</td>
                                <td>{{ $event->venue_time_zone }}</td>
                                <td>{{ $event->venue_country }}</td>
                                <td>{{ $event->venue_city }}</td>
                                <td>{{ $event->venue_postal_code }}</td>
                                <td>
                                    <a href="/buy" class="btn btn-success rounded-pill px-5"
                                        style="border-radius: 5px; text-decoration:none">Buy</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center mt-3">
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
