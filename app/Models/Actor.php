<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Actor extends Model
{
    
    protected $table = 'actor';  
    protected $primaryKey = 'actor_id'; 

   
    public $timestamps = false;  
    

    use HasFactory;

    protected $fillable = ['first_name', 'last_name'];
}
