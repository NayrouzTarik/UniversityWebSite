<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TP extends Model
{
    protected $table = 'tps';

    protected $fillable = ['matiere', 'teammates', 'file_path'];
}

