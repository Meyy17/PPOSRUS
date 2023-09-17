<?php

namespace App\Http\Controllers;

use App\Models\Mpk;
use App\Models\Osis;
use App\Models\User;
use App\Models\VoteMpk;
use App\Models\VoteOsis;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $countuser = User::where('role', 'user')->get()->count();
        $countvotempk = VoteMpk::all()->count();
        $countvoteosis = VoteOsis::all()->count();
        $countkandidatosis = Osis::all()->count();
        $countkandidatmpk = Mpk::all()->count();
        return view('admin/dashboard', compact('countuser', 'countvotempk', 'countvoteosis', 'countkandidatosis', 'countkandidatmpk'));
    }
    public function votingosis()
    {
        return view('admin/voting/osis');
    }
    public function votingmpk()
    {
        return view('admin/voting/mpk');
    }
    public function kandidatosis()
    {
        $osis = Osis::all();
        return view('admin/kandidat/osis', compact('osis'));
    }
    public function kandidatmpk()
    {
        $mpk = Mpk::all();
        return view('admin/kandidat/mpk', compact('mpk'));
    }
    public function logout()
    {
        return redirect()->route('home');
    }
}
