<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uses;
use App\Channel;

class PagesController extends Controller
{
    public function index()
    {
      $users = Channel::latest()->get();
      return view('index',['users' => $users]);
    }

    public function confirm(User $usur)
    {
      return view('confirm', ['user' => $user]);
    }
}
