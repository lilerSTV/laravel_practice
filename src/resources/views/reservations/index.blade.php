@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約一覧') }}</div>

                <div class="card-body">
                    <div class="mb-3">
                        <a href="{{ route('reservations.create') }}" class="btn btn-primary">新規登録</a>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>部屋</th>
                                <th>チェックイン</th>
                                <th>チェックアウト</th>
                            </tr>
                        </thead>
                        @foreach ($reservations as $reservation)
                            <th>
                                <td>{{ $reservation->id }}</td>
                                <td><a href="{{ route('reservations.show', $reservation->id) }}">{{ $reservation->room_name }}</a></td>
                            </th>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
