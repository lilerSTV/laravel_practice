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
                                  <select id="room_name" name="room_name" class="form-control">
                                        <option>桜の間</option>
                                        <option>松の間</option>
                                        <option>竹の間</option>
                                        <option>梅の間</option>
                                      </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUrl" class="col-sm-2 col-form-label">日付</label>
                                <div class="col-sm-10">
                                    <input type="date" name="start_date" class="form-control" value="2018-10-01" id="checkin">
                                    <input type="time" name="start_time" class="form-control" value="19:00" id="checkin">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputUrl" class="col-sm-2 col-form-label">日付</label>
                                <div class="col-sm-10">
                                    <input type="date" name="end_date" class="form-control" value="2018-10-01" id="checkin">
                                    <input type="time" name="end_time" class="form-control" value="23:00" id="checkin">
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
