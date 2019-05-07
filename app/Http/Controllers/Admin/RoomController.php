<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Channel;

class RoomController extends Controller
{
   public function add()
   {
     return view('admin.room.create');
   }

   public function create(Request $request)
   {
     $this->validate($request, Channel::$rules);

     $room = new Room;
     $form = request->all();

     unset($form['_token']);

     $room->fill($form);
     $room->seve();

     return redirect('admin/room/create');
   }

   public function edit(Request $request)
   {
     $room = Channel::find($request->id);
     if(empty($room)) {
       abort(404);
     }

     return view('admin.room.edit',['room_form' =>$room]);
   }

   public function update(Request $request)
   {
     $this->validate($request, Room::$rules);
     $room = Channel::find($request->id);
     $room_form =$request->all();
     unset($room_form['_token']);

     $room->fill($room_form)->save();

     return redirect('admin/room/edit');
   }

   public function index(Rquest $rquest)
   {
     $cond_roomname =$rquest->cond_roomname;
     if($cond_roomname != '') {
       $posts = Channel::where('roomname', $cond_roomname)->get();
     } else {
       $posts = Channel::all();
     }
     return view('admin.room.index', ['posts' => $posts, 'cond_roomname' => $cond_roomname]);
   }

   public function delete(Request $request)
   {
     $room = channel::find($request->id);
     $room->delete();
     return redirect('admin/room/');
   }
}
