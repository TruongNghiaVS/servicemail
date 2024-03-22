<?php

namespace App\Http\Controllers;
use Mail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \stdClass;
use Illuminate\Support\Facades\Log;
class UserController extends Controller
{

    public function MailResetPassword(Request $request)
    {
        $email = $request->input("emailTo");
        $codeGenerate = $request->input("code");
        $isMember = $request->input("isMember");
        $fullName = $request->input("fullName");
        $info =  array(
            "email"  => $email,
            "isMember"=> $request->input("isMember"),
            "fullName"  => $fullName,
            "codeGenerate" => $codeGenerate
        );
        $path = "resetPassword";
        if( $isMember==0)
        {
                $path = "resetPasswordTD";
        }   
        Mail::send($path, $info, function ($message)use($info)
        {
             $message->to($info["email"],$info["email"])
             ->subject('Cấp lại mật khẩu cho tài khoản');
             $message->from('noreply@jobvieclam.com');
        });
        return true;
    }
}
