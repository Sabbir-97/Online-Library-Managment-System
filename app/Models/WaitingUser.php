<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingUser extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','email','contact_number','approve'];
    
    
}