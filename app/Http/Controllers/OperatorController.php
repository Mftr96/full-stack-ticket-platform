<?php

namespace App\Http\Controllers;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    //returning view with all operators 
    public function index(){
        $operators=Operator::all();
        $data=[
            'operators'=>$operators,
        ];

        return view('operator.index', $data);

    }
}
