<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
 protected $table = "emails";   
protected $fillable = ['name','email','company' ,'subject' ,'message'];
   
}
