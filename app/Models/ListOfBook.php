<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListOfBook extends Model
{
    use HasFactory;
    // protected $fillable=['book_id','book_title','category','available_books','image_path'];
    protected $guarded=[];

    public $timestamps=false;
}
