@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-table">
            <table>
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Train code</th>
                        <th>Coaches Number</th>
                        <th>Departure Station</th>
                        <th>Departure Time</th>
                        <th>Arrival station</th>
                        <th>Arrival time</th>
                        <th>Train status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->coaches_number }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        @if($train->in_time)
                        <td>In orario!</td>
                        @elseif($train->deleted)
                        <td>cancelled</td>
                        @else
                        <td>delay</td>
                        @endif
                    </tr>
                    @empty
                    <p>There are no trains</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection