<?php

namespace App\Http\Controllers;
use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\Log;
class MailController extends Controller
{

    public function testmail(Request $request)
    {
        $email = $request->input("emailTo");
        $codeGenerate = $request->input("code");
        $password = "xxxxxxxxxxxx";
        if ($request->has('password')){
            $password =  $request->input("password");
        }
        $info =  array(
            "email"  => $email,
            "codeGenerate" => $codeGenerate,
            "password"=>$password,
        );
        Mail::send('mail', $info, function ($message)use($info)
        {
             $message->to($info["email"],$info["email"])
                     ->subject('Thông báo: Xác nhận kích hoạt tài khoản tuyển dụng');
            $message->from('noreply@jobvieclam.com');
        });
        return true;
    }

    public function sendMailRegigerUV(Request $request)
    {
        $email = $request->input("emailTo");
      
        $fullName = $request->input("fullName");
        $password = "xxxxxxxxxxxx";

        if ($request->has('password')){
            $password =  $request->input("password");
        }
        $info =  array(
            "email"  => $email,
            "password"=>$password,
            "fullName"=>$fullName
           
        );


        Mail::send('mailMember', $info, function ($message)use($info)
        {
             $message->to($info["email"],$info["email"])
                     ->subject('THÔNG BÁO: Tạo tài khoản thành công ');
                     $message->from('noreply@jobvieclam.com');
        });
        return true;
    }
}
