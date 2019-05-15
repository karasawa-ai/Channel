<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\User;
use App\Channel;

class RoomController extends Controller
{
    public function index(Request $request)
    {
      $cond_roomname = $request->cond_roomname;
      if($cond_roomname != '') {
        $posts = Channel::where('roomname' ,$cond_roomname).ordeBy('updated_at', 'desc')->get();
      } else {
        $posts = Channel::all()->sortByDesc('updated_at');
      }

      if (count($posts) > 0) {
        $headline = $posts->shift();
      } else {
        $headline = null;
      }

      return view('room.index', ['headline' => $headline, 'posts' => $posts, 'cond_roomname' => $cond_roomname]);
    }
}
