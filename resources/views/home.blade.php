@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="py-5">
        <h1 class="text-center">Departures</h1>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Departure Date</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Arrival Date</th>
                        <th scope="col">Arrival Time</th>
                        <th scope="col">Train Code</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($train as $item)
                        <tr>
                            <th scope="row">{{ $item->company }}</th>
                            <td>{{ $item->departure_station }}</td>
                            <td>{{ $item->departure_date }}</td>
                            <td>{{ $item->departure_time }}</td>
                            <td>{{ $item->arrival_station }}</td>
                            <td>{{ $item->arrival_date }}</td>
                            <td>{{ $item->arrival_time }}</td>
                            <td>{{ $item->train_code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection
