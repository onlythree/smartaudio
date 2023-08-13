<?php

namespace App\Http\Controllers;

use App\Models\LienHe;
use Illuminate\Http\Request;
use Validator;

class LienHeController extends Controller
{
    public function submitContact(Request $request)
    { 
        $lienhe = new LienHe();
        $lienhe->name = request()->name;
        $lienhe->email = request()->email;
        $lienhe->phone = request()->phone;
        $lienhe->reason = request()->reason;
        $lienhe->subject = request()->subject;
        $lienhe->content = request()->content;
        $lienhe->save();
        return response()->json('[success=>true]',200);
    }
    
    public function submitDangkyNhantin()
    {
        $lienhe = new LienHe();
        $lienhe->name = '';
        $lienhe->email = request()->get('email_dangky');
        $lienhe->phone = '';
        $lienhe->reason = 'Đăng ký nhận thông tin';
        $lienhe->subject = request()->get('email_dangky').' đăng ký nhận thông tin mới';
        $lienhe->content = '';
        $lienhe->note = '';
        $lienhe->save();
        return response()->json('[success=>true]',200);
    }
    public function fsubmitDangkyNhantin()
    {
        $lienhe = new LienHe();
        $lienhe->name = '';
        $lienhe->email = request()->get('femail_dangky');
        $lienhe->phone = '';
        $lienhe->reason = 'Đăng ký nhận thông tin';
        $lienhe->subject = request()->get('femail_dangky').' đăng ký nhận thông tin mới';
        $lienhe->content = '';
        $lienhe->note = '';
        $lienhe->save();
        return response()->json('[success=>true]',200);
    }
}
