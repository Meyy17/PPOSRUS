<?php

namespace App\Http\Controllers;

use App\Models\Mpk;
use App\Models\Osis;
use App\Models\VoteMpk;
use App\Models\VoteOsis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function success()
    {
        return view('vote/success');
    }
    public function voteOsis(Request $request)
    {
        $votePaslonOsis = "";
        $votePaslonOsis = $request->paslonOsisNumber;
        $osis = Osis::all();
        return view('vote/osis', compact('votePaslonOsis', 'osis'));
    }
    public function voteMpk(Request $request)
    {
        $votePaslonOsis = "";
        $votePaslonOsis = $request->paslonOsisNumber;
        $votePaslonMpk = "";
        $votePaslonMpk = $request->paslonMpkNumber;
        $mpk = Mpk::all();
        return view('vote/mpk', compact('votePaslonOsis', 'votePaslonMpk', 'mpk'));
    }
    public function vote(Request $request)
    {
        $votePaslonOsis = $request->paslonOsisNumber;
        $votePaslonMpk = $request->paslonMpkNumber;
        if ($votePaslonOsis != "" && $votePaslonMpk != "") {
            // return "OSIS : " . $votePaslonOsis . ", MPK : " . $votePaslonMpk;
            $checkusermpk = VoteMpk::where('id_user', Auth()->user()->id)->get();
            $checkuserosis = VoteOsis::where('id_user', Auth()->user()->id)->get();

            if ($checkusermpk->isEmpty() && $checkuserosis->isEmpty()) {

                $osis = Osis::where('number', $votePaslonOsis)->first();
                $mpk = Mpk::where('number', $votePaslonMpk)->first();
                VoteOsis::create([
                    'id_user' => Auth()->user()->id,
                    'id_osis' => $osis->id,
                ]);
                VoteMpk::create([
                    'id_user' => Auth()->user()->id,
                    'id_mpk' => $mpk->id,
                ]);
                return redirect()->route('vote.success');
            } else {
                return "tdkbisa";
            }
        } else if ($votePaslonOsis == "") {
            redirect()->route('vote.osis');
        } else if ($votePaslonMpk == "") {
            redirect()->route('vote.mpk');
        } else {
            return view('vote.osis');
        }
    }
}
