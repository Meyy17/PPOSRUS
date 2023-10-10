<?php

namespace App\Http\Controllers;

use App\Models\VoteMpk;
use App\Models\VoteOsis;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginNis(Request $request)
    {

        $request->validate(
            [
                'nis' => 'required',
            ]
        );

        $credentials = [
            'nis' => $request->nis,
            'password' => 'superadmin'
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $checkusermpk = VoteMpk::where('id_user', Auth()->user()->id)->get();
            $checkuserosis = VoteOsis::where('id_user', Auth()->user()->id)->get();

            if ($checkusermpk->isEmpty() && $checkuserosis->isEmpty()) {
                return redirect()->route('vote.osis');
            } else {

                Auth::logout();

                return "tdkbisa";
            }
        }


        return redirect()->back()->with('alert', 'Updated!');
    }
    public function loginAdmin(Request $request)
    {

        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ]
        );

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }


        return redirect()->back()->with('alert', 'Updated!');
    }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('index');
    }
}
