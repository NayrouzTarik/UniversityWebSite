<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = ['incident_type', 'description', 'date', 'time', 'department', 'class'];
}

