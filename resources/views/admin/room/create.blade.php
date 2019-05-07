@extends('layouts.admin')
@section('title', '部屋の新規作成')

@section('content')
 <div class="container">
   <div class="row">
     <div class="colmd- mx-auto">
       <h2>ROOM新規作成画面</h2>
       <form action="{{ action('Admin\RoomController@create') }}" method="post" enctype="multipart/form-data">
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
             <input type="roomname" class="formcontrol" name="roomname" value="{{ old('room') }}">
           </div>
         </div>
         <div class="form-group row">
           <label class="col-md-2" for="readme">部屋の説明</label>
           <div class="col-md-10">
             <textarea class="form-conrol" name="readme" rows="20">{{ old('readme') }}</textarea>
           </div>
         </div>
         {{ csrf_field() }}
         <input type="submit" class="btn btn-primary" value="作成">
       </form>
     </div>
   </div>
 </div>
 @endsection
