<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
 protected $table = "emails";   
protected $fillable = ['name','email','phone','company' ,'subject' ,'message'];
   
}
