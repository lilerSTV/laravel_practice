@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('予約一覧詳細') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>部屋の種類</th>
                        <td>{{ $reservation->room_name}}</td>
                        </tr>
                        <tr>
                            <th>部屋の種類</th>
                        <td>{{ $reservation->room_name}}</td>
                        </tr>
                        <tr>
                            <th>部屋の種類</th>
                        <td>{{ $reservation->room_name}}</td>
                        </tr>
                        <tr>
                            <th>作成日</th>
                        <td>{{ $reservation->created_at->format('Y年m月d日') }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
