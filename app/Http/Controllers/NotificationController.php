<?php

namespace App\Http\Controllers;
use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\Log;
class NotificationController extends Controller
{

    public function NotificationPassword(Request $request)
    {
        $email = $request->input("emailTo");
        
        $info =  array(
            "email"  => $email,
            "fullName"=> $request->input("fullName")
           
        );
        $path = "notificationPassword";
       
        Mail::send($path, $info, function ($message)use($info)
        {
             $message->to($info["email"],$info["email"])
                     ->subject('Thông Báo Mật Khẩu Mới');
             $message->from('nghiait06@gmail.com','jobvieclam.vn');
        });
        return true;
    }
}
