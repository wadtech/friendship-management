<?php
namespace Softservlet\Friendship\Laravel\Eloquent;

use Eloquent;

class Friendship extends Eloquent
{
  public $table = 'friendships';

  public $fillable = ['sender_id', 'receiver_id']

  public $timestamps = false;
}
