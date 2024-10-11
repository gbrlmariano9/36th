<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use DB;
use Auth;



class r4dController extends Controller {


    public function index() {
        return view('r4d_conference.index');
    }

    public function strat() {
        return view('strat-plan.index');
    }

    public function r4d() {
        return view('r4d_conference.app');
    }

    public function send_MailComments(Request $request) {
        $fullName =  $request->name;
        $comments = $request->comments;
        $rate = $request->rating;
        $datenow = date("Y-m-d H:i:s");
        $firstName ="Gabriel";
        $midName ="A.";
        $lastName ="Mariano";
        $extName ="";
        // $email = "ricesecretariat@gmail.com";
        $email = "gbrlmariano9@gmail.com";
        $datenowInserted = date("F j, Y");
        
        $data = ["fullName"=>($fullName), "dateNow"=> $datenow, "comments"=>($comments), "rate"=>($rate), ];
        Mail::send('email.mail-form-comment',$data, function($message) use ($email){          
            $message->to($email);
            $message->subject('36th Ugnay Palay National Rice R4D Conference Comments and Suggestions');
        });

        $status ="error";
        if (count(Mail::failures()) > 0) {
           // save error      
        }else{
           return "sent";
        }   
    }

   
}

