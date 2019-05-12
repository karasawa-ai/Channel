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
      $cond_title = $requst->cond_title;
      if($cond_title != '') {
        $posts = Channel::where('roomname' ,$cond_title).ordeBy('updated_at', 'desc')->get();
      } else {
        $posts = Channel::all()->sortByDesc('updated_at');
      }

      if (conut($posts) > 0) {
        $headlink = $posts->shift();
      } else {
        $headlink = null;
      }

      return view('room.index', ['headline' => $headline, 'posts' => $posts, 'cond_title' => $cond_title]);
    }
}
