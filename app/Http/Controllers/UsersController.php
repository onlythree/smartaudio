<?php

namespace App\Http\Controllers;

use App\Models\OrderCourse;
use App\Models\orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function logoutFunction()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    public function loginFunction(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
            //$request->session()->regenerate();
            $return = request()->get('return');
            if (!empty($return)) {
                return redirect()->to($return);
            }
            return response()->json(['msg' => 'success'], 200);
        }

        return back()->withErrors([
            'username' => 'Tên đăng nhập không chính xác.',
        ])->onlyInput('username');
    }
    public function login()
    {
        if (!empty(auth()->user())) {
            $return = request()->get('return');
            if (!empty($return)) {
                return redirect()->to($return);
            }
            return redirect()->route('profile');
        }
        return view('user.login');
    }
    public function registerFunction(Request $request)
    {
        $fullname = $request->fullname;
        $email = $request->email; 
        $username = $request->username;
        $password = $request->password;

        $checkUser = User::where('username', $username)->first();
        if (empty($checkUser)) {
            $user = new User();
            $user->fullname = $fullname;
            $user->email = $email; 
            $user->username = $username;
            $user->password = Hash::make($password);
            $user->active = 1; 
            if ($user->save() == 1) {
                // var_dump(Hash::make($password));
                // dd(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1]));
                if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'active' => 1])) {
                    //$request->session()->regenerate();
                    $return = request()->get('return');
                    if (!empty($return)) {
                        return redirect()->to($return);
                    }
                    return response()->json(['status'=>'ok','msg' => 'success'], 200);
                }
            }
        }
        return response()->json(['status'=>'e','msg' => 'Tài khoản hoặc mật khẩu đã được sử dụng'], 200);
    }
    public function profile()
    {
        $user = auth()->user();
        $totalOrder = orders::where('customer_phone', $user->username)->get()->count();
        $orderList = orders::where('customer_phone', $user->username)->orderby('id','desc')->limit(5)->get();
        $totalSumOrderCompleted = 0;
        $totalOrderSumary = orders::where('customer_phone', $user->username)->selectRaw('sum(order_sumary) as total')->first();
        $data = [
            'user' => $user,
            'totalOrder' => $totalOrder,
            'orderList' => $orderList,
            'totalSumOrderCompleted' => $totalSumOrderCompleted,
            'totalOrderSumary' => $totalOrderSumary,
        ];
        
        return view('user.profile', $data);
    }
    public function info()
    {
        $user = auth()->user();
        $data = [
            'user' => $user,
        ];
        return view('user.info', $data);
    }
    public function updateAccountInfo(Request $request)
    {
        $user = auth()->user();
        $updUser = User::find($user->id);
        $updUser->fullname = $request->fullname;
        $updUser->phone = $request->phone;
        $updUser->email = $request->email;
        $updUser->save();
        return redirect()->back()->with('message', 'Cập nhật tài khoản thành công!');
    }
    public function changePassword()
    {
        $user = auth()->user();
        $data = [
            'user' => $user,
        ];
        return view('user.change-password', $data);
    }
    public function changePasswordProcess(Request $request)
    {
        $user = auth()->user();
        if (!Hash::check($request->currentPassword, $user->password)) {
            return redirect()->back()->with("error", "Mật khẩu hiện tại không chính xác!");
        }
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPassword)
        ]);
        return redirect()->back()->with('message', 'Cập nhật mật khẩu tài khoản thành công!');
    }
   
    public function getOrder()
    {
        $user = auth()->user();
        if (!empty($user)) {
            $orderList = orders::join('orders_details', 'orders_details.order_id', 'orders.id')->where('orders.customer_phone', $user->username)->paginate(30);
            $data = [ 
                'orderList' => $orderList,
                'user' => $user,
            ];
            return view('user.order-list', $data);
        }
        return redirect()->route('login-page');
    }
}
