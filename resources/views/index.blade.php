<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>

    <body>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th class="text-danger">Company</th>
                    <th class="text-danger">Departure Station</th>
                    <th class="text-danger">Arrival Station</th>
                    <th class="text-danger">Departure Date</th>
                    <th class="text-danger">Arrival Date</th>
                    <th class="text-danger">Train Code</th>
                    <th class="text-danger">Number of Carriages</th>
                    <th class="text-danger">In Time</th>
                    <th class="text-danger">Deleted</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_date }}</td>
                        <td>{{ $train->arrival_date }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->number_of_carriages }}</td>
                        <td>{{ $train->in_time }}</td>
                        <td>{{ $train->deleted }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
