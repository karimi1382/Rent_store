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

        $request->validate([
            'File' => 'sometimes|file|max:5000',
        ]);
        
        if(isset($request->File)){
        $file_size=($request->File)->getSize();
        if($file_size > 5000000){
            return redirect('newticket')->with('error','no add ticket');
        }
    }


        $tickect=new main_ticket;
        $tickect->ticket_type_id       =       $request->ticket_type_id;
        $tickect->text                  =       $request->text;
        $tickect->user_id               =      auth::user()->id;

        if($request->File()) {

            $ticket_id=main_ticket::orderby('id','DESC')->first();
            $id=$ticket_id->id;
            $id++;
     
            $fileName = time().'_'.$request->File->getClientOriginalName();
            $filePath = $request->File->storeAs('user/'.auth::user()->id.'/ticket/'.$id.'/', $fileName, 'public');
            $tickect->file = $fileName;
        } 


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
        $request->validate([
            'file' => 'sometimes|file|max:5000',
        ]);
        
        if(isset($request->file)){
        $file_size=($request->file)->getSize();
        if($file_size > 5000000){
            return redirect('newticket')->with('error','no add ticket');
        }
    }

        $answer_ticket=new answer_ticket;
        $answer_ticket->main_ticket_id  =  $request->main_ticket_id;
        $answer_ticket->user_id         =   auth::user()->id;
        $answer_ticket->answer          =   $request->text;

        if($request->File()) {

       
     
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file->storeAs('user/'.auth::user()->id.'/ticket/'.$request->main_ticket_id.'/', $fileName, 'public');
            $answer_ticket->file_address = $fileName;
        } 

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
