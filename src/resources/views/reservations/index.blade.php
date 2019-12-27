@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約一覧') }}</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>部屋</th>
                                <th>日付</th>
                            </tr>
                        </thead>
                        @foreach ($reservations as $reservation)
                            <th>
                            <td>{{ $reservation->id }}</td>
                            <td><a href="/reservations/{{$reservation->id}}">{{ $reservation->room_name }}</a></td>
                            </th>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
