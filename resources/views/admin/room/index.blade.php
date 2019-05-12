@extends('layouts.admin')
@section('title', '作成済みの部屋')

@section('content')
<div class="container">
  <div class="row">
    <h2>部屋一覧</h2>
  </div>
  <div class="row">
    <div class="col-md-4">
      <a href="{{ action('Admin\RoomController@add') }}" role="button" class="btn btn-primary">新規作成</a>
    </div>
    <div class="col-md-8">
      <form action="{{ action('Admin\RoomController@index') }}" method="get">
        <div class="form-group row">
        <label class="col-md-2">部屋の名前</label>
        <div class="col-md-8">
          <input type="roomname" class="form-control" name="cond_roomname" value="{{ $cond_roomname }}">
        </div>
        <div class="col-md-2">
          {{ csrf_field() }}
          <input type="submit" class="btn btn-primary" value="探す">
        </div>
      </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="admin-room col-md-12 mx-auto">
    <div class="row">
      <table class="table table-bark">
        <thead>
          <tr>
            <th width="10%">ID</th>
            <th width="20%">部屋名</th>
            <th width="50%">説明</th>
            <th width="10%">操作</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $room)
          <tr>
            <th>{{ $room->id }}</th>
            <td>{{ str_limit($room->roomname,100) }}</td>
            <td>{{ str_limit($room->readme,250) }}</td>
            <td>
              <div>
                <a href="{{ action('Admin\RoomController@edit',['id' => $room->id]) }}">編集</a>
              </div>
              <div>
                <a href="{{ action('Admin\RoomController@delete', ['id' =>$room->id]) }}">削除</a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
@endsection
