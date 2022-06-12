<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    protected $table = "crud";
    protected $fillable = ['category_id','category_name','order'];
    use HasFactory;
}
