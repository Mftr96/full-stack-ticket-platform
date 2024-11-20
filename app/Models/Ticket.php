<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //defining relationship with categories and operators
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Category::class);
    } 

    public function operators(){
        return $this->belongsTo(Operator::class);
    }
}