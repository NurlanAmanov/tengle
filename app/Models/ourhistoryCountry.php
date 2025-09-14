<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ourhistoryCountry extends Model
{ protected $table = 'our_history_country';
    protected $fillable = ['title','content','image'];
}
