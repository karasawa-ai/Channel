<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
      'roomname' => 'required',
      'readme' => 'required',
      'body' =>'required',
      
    );
}
