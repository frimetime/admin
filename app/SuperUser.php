<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SuperUser extends Model
{

  use Notifiable;

  protected $fillable = [
    'name', 'email', 'password',
  ];

  protected $hidden = [
    'password',
  ];

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];


  public function setPasswordAttribute($password)
  {
    if ( !empty($password) ) {
      $this->attributes['password'] = bcrypt($password);
    }
  }
}
