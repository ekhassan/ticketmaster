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
                    <a href="/buy" class="btn btn-success p-2" style="border-radius: 5px; text-decoration:none">Buy</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
