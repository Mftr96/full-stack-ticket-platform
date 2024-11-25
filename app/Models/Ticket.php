<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable=[
        'title',
        'description',

    ];
    //defining relationship with categories and operators
    use HasFactory;
    public function category(){
        return $this->belongsTo(Category::class);
    } 

    public function operator(){
        return $this->belongsTo(Operator::class);
    }
}
