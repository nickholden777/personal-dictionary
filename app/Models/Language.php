<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = ['user_id', 'lang', 'part', 'field1', 'field2'];
}
