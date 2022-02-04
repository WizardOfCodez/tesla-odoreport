<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdoReport extends Model
{
    use HasFactory;
    protected $fillable = ['user','odometer','created_at'];
}
