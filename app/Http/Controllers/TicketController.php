<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    //aggiungere categoria e operatore nella query
    public function index(){
        $tickets=Ticket::with(['category','operator'])->paginate(8);
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
            "title"=>"required",
            "description"=>"required",
            "category_id"=>"required|integer|exists:categories,id",
            "operator_id"=>"required|integer|exists:operators,id",
        ]);
        #dd($data);
        $newTicket= new Ticket();
        $newTicket->title=$data['title'];
        $newTicket->description=$data['description'];
        #default status value
        $newTicket->status="ASSEGNATO";
        $newTicket->category_id=$data['category_id'];
        $newTicket->operator_id=$data['operator_id'];
        #dd($newTicket); 

        $newTicket->save();
        return redirect()->route('ticket.index')->with('message','ticket salvato correttamente'); 
    }
}
