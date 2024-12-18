<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Operator;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    const STATUS_VALUES = ['ASSEGNATO', 'IN LAVORAZIONE', 'CHIUSO'];

    #INDEX FUNCTION
    public function index(){
        #adding category and operaton into query 
        $tickets = Ticket::with(['category', 'operator'])->paginate(8);
        $data = [
            'tickets' => $tickets,
        ];

        return view('ticket.index', $data);
    }
    #CREATE FUNCTION 
    public function create(){
        #passing operator and category in create view
        $data = [
            'categories' => Category::all(),
            'operators' => Operator::all(),
        ];

        return view('ticket.create', $data);
    }
    #STORE FUNCTION
    public function store(Request $request){
        $data = $request->validate([
            #requiring category and operator id
            "title" => "required",
            "description" => "required",
            "category_id" => "required|integer|exists:categories,id",
            "operator_id" => "required|integer|exists:operators,id",
        ]);
        #dd($data);
        $newTicket = new Ticket();
        $newTicket->title = $data['title'];
        $newTicket->description = $data['description'];
        #default status value
        $newTicket->status = "ASSEGNATO";
        $newTicket->category_id = $data['category_id'];
        $newTicket->operator_id = $data['operator_id'];
        #dd($newTicket); 

        $newTicket->save();
        return redirect()->route('ticket.index')->with('message', 'ticket salvato correttamente');
    }
    #SHOW FUNCTION

    public function show(Ticket $ticket){
        #dd($ticket);
        $data = [
            'ticket' => $ticket,
        ];
        return view('ticket.show', $data);
    }
    #EDIT FUNCTION 
    public function edit(Ticket $ticket){
        #dd($ticket);
        $data = [
            'ticket' => $ticket,
        ];
        return view('ticket.edit', $data);
    }
    #UPDATE FUNCTION(only status)
    public function update(Request $request, Ticket $ticket){
        $request->validate([
            'status' => 'required|in:' . implode(',', self::STATUS_VALUES),
        ]);
        #requesting only status 
        $data=$request->only(['status']);
        try {
            $ticket->status = $data['status'];
            $ticket->update();
        } catch (\Exception $e) {
            return redirect()->route('ticket.index')->withErrors('Failed to update ticket.');
        }
        return redirect()->route('ticket.index');
    }
}
