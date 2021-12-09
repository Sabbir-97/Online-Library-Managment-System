<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newspaper extends Model
{
    use HasFactory;
    // protected $fillable=['newspaper_id','newspaper_name','category','available_newspaper'];
    protected $guarded=[];
}
