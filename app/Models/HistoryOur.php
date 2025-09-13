<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryOur extends Model
{
    protected $fillable = ['year','title','content'];
     protected $table = 'our_story';
}
