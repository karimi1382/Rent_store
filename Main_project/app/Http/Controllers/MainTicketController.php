<?php

namespace App\Http\Controllers;

use App\Models\answer_ticket;
use App\Models\main_ticket;
use App\Models\ticket_type;

use Illuminate\Http\Request;
use Auth;

class MainTicketController extends Controller
{
    //
    public function index(){
        $ticket_types=ticket_type::all();
        return view('user.newticket',compact('ticket_types'));
    }
    public function insert(Request $request){
        $tickect=new main_ticket;
        $tickect->ticket_type_id       =       $request->ticket_type_id;
        $tickect->text                  =       $request->text;
        $tickect->user_id               =      auth::user()->id;
        $tickect->save();
        return redirect('allticket')->with('success','add ticket');
    }
    public function allticket(){
        $alltickets = main_ticket::with('ticket_types')->where('user_id',auth::user()->id)->orderBy('main_tickets.id')->get();
        // $answer=answer_ticket::with('main_ticket')->where('main_tickets.user_id',auth::user()->id)->get();
        // dd($answer);
        return view('user.allticket',compact('alltickets'));
    }
    public function ticketdetail($id){
        $ticketdetails=null;
        if(auth::user()){
            $ticketdetails=answer_ticket::with('main_tickets')->where('answer_tickets.main_ticket_id',$id)->orderBy('answer_tickets.id','DESC')->get();
            $alltickets = main_ticket::with('ticket_types')->where('user_id',auth::user()->id)->where('main_tickets.id',$id)->first();
            $ticketdetail_status=answer_ticket::with('main_tickets')->where('answer_tickets.main_ticket_id',$id)->orderBy('answer_tickets.id','DESC')->first();


            return view('user.ticketdetail',compact('ticketdetails','alltickets','ticketdetail_status'));
        }
    }
    public function addanswerticket(Request $request){
        $answer_ticket=new answer_ticket;
        $answer_ticket->main_ticket_id  =  $request->main_ticket_id;
        $answer_ticket->user_id         =   auth::user()->id;
        $answer_ticket->file_id         =   $request->file;
        $answer_ticket->answer          =   $request->text;
        $answer_ticket->save();

        $mane_ticket=main_ticket::find($request->main_ticket_id);
        $mane_ticket->status = 1;
        $mane_ticket->save();

        return redirect()->route('ticketdetail',$request->main_ticket_id)->with('success','ticket answer success');
    }
}
