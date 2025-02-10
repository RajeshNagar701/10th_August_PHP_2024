<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    // public $table="customers"; 
    
    //public $primarykey="cust_id";

    //public $timestamps=false;
    protected $fillable = ['status'];
    use HasFactory;
}
