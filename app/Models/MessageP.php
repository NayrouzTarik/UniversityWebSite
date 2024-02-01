<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MessageP extends Model
{
    protected $table = 'messagep';
    protected $fillable = ['nom', 'message'];
}
