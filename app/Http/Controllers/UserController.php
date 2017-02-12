<?php

/**
 * Created by PhpStorm.
 * User: TimonoloGy
 * Date: 2/10/2017
 * Time: 7:22 AM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function getSignUp()
    {
        return view('user.signup');
    }

    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();

        if(Session::has('oldUrl')){
            $oldurl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldurl);
        }

        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getSignIn()
    {
        return view('user.signin');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email'=> 'email|required',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]))
        {
            return redirect()->route('user.profile');

            if(Session::has('oldUrl')){
                $oldurl = Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldurl);
            }
        }
        return redirect()->back();
    }

    public function getProfile()
    {
        return view('user.profile');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('user.signin');
    }
}
