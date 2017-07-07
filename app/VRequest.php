<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VRequest extends Model
{
	protected $fillable = ['vacation_start', 'vacation_end', 'message',];
}
