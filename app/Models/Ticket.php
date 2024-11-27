<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    const STATUS_VALUES = ['ASSEGNATO', 'IN LAVORAZIONE', 'CHIUSO'];
    #fillable column that can be changed in update
    protected $fillable=[
        'title',
        'description',
        'status',
        'category_id',
        'operator_id',

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
