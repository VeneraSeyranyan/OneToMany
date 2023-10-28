<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use Illuminate\Http\Response;

class TicketController extends Controller
{
    public function  getTicket(){
        $tickets = Ticket::with('flight')->get();
        foreach ($tickets as $ticket){
//            dd($ticket->flight->flight_id);
        }
        return response()->json([
            'success' => true,
            'data' => $tickets,
        ], Response::HTTP_OK);
    }
    public function store(TicketRequest $request)
    {
    }
}

