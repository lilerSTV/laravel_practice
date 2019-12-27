@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('予約一覧登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('reservations.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">部屋の種類</label>
                                <div class="col-sm-10">
                                  <input type="text" name="room_id" class="form-control" id="room_name">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUrl" class="col-sm-2 col-form-label">日付</label>
                                <div class="col-sm-10">
                                  <input type="text" name="date" class="form-control" id="checkin">
                                </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">登録</button>
                                      <a href="{{ route('reservations.index') }}" class="btn btn-secondary">戻る</a>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
