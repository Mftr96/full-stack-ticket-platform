<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;
    //disabling timestamps 
    public $timestamps=false;
    //one to many relations with tickets
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
