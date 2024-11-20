<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #one to many relation
    public function tickets(){
        return $this->hasmany(Ticket::class);
    }
}
