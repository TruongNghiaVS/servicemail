<?php

namespace App\Http\Controllers;
use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\Log;
class TestmailController extends Controller
{

    public function testmail(Request $request)
    {
        $email = $request->input("emailTo");
        $codeGenerate = $request->input("code");
        
        $info =  array(
            "email"  => $email,
            "codeGenerate" => $codeGenerate
        );

        Log::info( $info);
     
        Mail::send('mail', $info, function ($message)use($info)
        {
             $message->to($info["email"],$info["email"])
                     ->subject('Kích hoạt tài khoản mới trên Jobvieclam');
             $message->from('nghiait06@gmail.com','jobvieclam');
        });
        return true;
    }
}
