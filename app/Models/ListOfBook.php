<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfBook extends Model
{
    use HasFactory;
    protected $fillable=['book_title','category','available_books'];
}
