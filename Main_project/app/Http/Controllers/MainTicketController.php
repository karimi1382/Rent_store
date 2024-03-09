<?php

namespace App\Http\Controllers;

use App\Models\answer_ticket;
use App\Models\main_ticket;
use App\Models\ticket_type;
use Hekmatinasser\Verta\Verta;

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
        if(auth::user()->id==1){
            return redirect()->route('adminticketdetail',$request->main_ticket_id)->with('success','ticket answer success');

        }else{
        return redirect()->route('ticketdetail',$request->main_ticket_id)->with('success','ticket answer success');
        }
    }
    public function close_ticket(Request $request)
    {
        $main_ticket=main_ticket::find($request->main_ticket_id);
        $main_ticket->status = (int)$request->status;
        $main_ticket->save();
        if(auth::user()->id==1){
            return redirect('adminallticket')->with('close','close ticket');
        }else{
        return redirect('allticket')->with('close','close ticket');
    }
    
        }
    

    public function adminallticket(){
        $alltickets = main_ticket::with('ticket_types')->orderBy('main_tickets.id')->get();
        return view('admin.allticket',compact('alltickets'));

    }
    public function adminticketdetail($id){
        $ticketdetails=null;
        
            $ticketdetails=answer_ticket::with('main_tickets')->where('answer_tickets.main_ticket_id',$id)->orderBy('answer_tickets.id','DESC')->get();
            $alltickets = main_ticket::with('ticket_types')->where('main_tickets.id',$id)->first();
            $ticketdetail_status=answer_ticket::with('main_tickets')->where('answer_tickets.main_ticket_id',$id)->orderBy('answer_tickets.id','DESC')->first();

         
            return view('admin.ticketdetail',compact('ticketdetails','alltickets','ticketdetail_status'));
        
    }
}
