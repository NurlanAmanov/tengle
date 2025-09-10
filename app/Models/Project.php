<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';  
protected $fillable = [
        'project_title',
        'vessel_name',
        'company_or_owner',
        'completion_year',
        'dimensions',
        'image_url', 
    ];
}
