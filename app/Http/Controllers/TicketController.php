<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    //aggiungere categoria e operatore nella query
    public function index(){
        $tickets=Ticket::with(['categories','operators'])->paginate(8);
        $data=[
            'tickets'=>$tickets,
        ];

        return view('ticket.index', $data);

    }
    //go to create ticket view 
    public function create(){
    #passing operator and category in create view
        $data=[
            'categories'=>Category::all(),
            'operators'=>Operator::all(),
        ];

        return view('ticket.create',$data);
    }

    public function store(Request $request){
        $data=$request->validate([
            #requiring category and operator id
            "category_id"=>"required",
            "operator_id"=>"required",
        ]);
        #creating new istance of Ticket
        $newTicket=new Ticket();
        $newTicket->fill($data);
        dd($newTicket);
    }



}
