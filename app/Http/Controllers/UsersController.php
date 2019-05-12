<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Channel;

class UsersController extends Controller
{
    public function save(UsersRquest $rquest)
    {
      $user = new User();
      if ($request->name) $user->name = $request->name;
      $user->password = Hash::make($request->password);
      $user->body =$request->body;
      $user->save();
      return redirect('room/chat/');
    }

    public function delete(Rquest $request)
    {
      $user = Channel::findOrFail($request->id);
      $user->delete();
      return redirect('room/chat/');
    }
}
