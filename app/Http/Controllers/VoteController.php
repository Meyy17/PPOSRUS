<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('vote/osis', compact('votePaslonOsis'));
    }
    public function voteMpk(Request $request)
    {
        $votePaslonOsis = "";
        $votePaslonOsis = $request->paslonOsisNumber;
        $votePaslonMpk = "";
        $votePaslonMpk = $request->paslonMpkNumber;
        return view('vote/mpk', compact('votePaslonOsis', 'votePaslonMpk'));
    }
    public function vote(Request $request)
    {
        $votePaslonOsis = $request->paslonOsisNumber;
        $votePaslonMpk = $request->paslonMpkNumber;
        if ($votePaslonOsis != "" && $votePaslonMpk != "") {
            // return "OSIS : " . $votePaslonOsis . ", MPK : " . $votePaslonMpk;
            return redirect()->route('vote.success');
        } else {
            return view('index');
        }
    }
}
