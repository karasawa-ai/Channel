@extends('layouts.admin')
@section('title', '部屋の編集')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>部屋の編集</h2>
      <form action="{{ action('Admin\RoomController@update') }}" method="post" enctype="multipart/form-data">

        @if (count($errors) > 0)
        <ul>
          @foreach($errors->all() as $e)
          <li>{{ $e }}</li>
          @endforeach
        </ul>
        @endif
        <div class="form-group row">
          <label class="col-md-2" for="roomname">部屋の名前</label>
          <div class="col-md-10">
            <input type="roomname" class="form-control" name="roomname" value="{{ $room_form->roomname }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="readme">部屋の説明</label>
          <div class="col-md-10">
            <textarea class="form-control" name="readme" rows="20">{{ $room_form->readme }}</textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $room_form->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="変更する">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
