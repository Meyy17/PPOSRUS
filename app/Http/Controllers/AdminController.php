<?php

namespace App\Http\Controllers;

use App\Models\Mpk;
use App\Models\Osis;
use App\Models\User;
use App\Models\VoteMpk;
use App\Models\VoteOsis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $osis = Osis::withCount('votes')->get();
        $countuser = User::where('role', 'user')->get()->count();
        $countvote = VoteOsis::all()->count();
        $countkandidat = Osis::all()->count();

        return view('admin/voting/osis', compact('osis', 'countuser', 'countvote', 'countkandidat'));
    }
    public function votingmpk()
    {
        $mpk = Mpk::withCount('votes')->get();
        $countuser = User::where('role', 'user')->get()->count();
        $countvote = VoteMpk::all()->count();
        $countkandidat = Mpk::all()->count();

        return view('admin/voting/mpk', compact('mpk', 'countuser', 'countvote', 'countkandidat'));
    }
    public function kandidatosis()
    {
        $osis = Osis::all();
        return view('admin/kandidat/osis', compact('osis'));
    }
    public function destroyosis($id)
    {
        $data = Osis::find($id);
        Storage::disk('public')->delete($data->image);

        $data->delete();

        return back();
    }
    public function destroympk($id)
    {
        $data = Mpk::find($id);
        Storage::disk('public')->delete($data->image);

        $data->delete();

        return back();
    }
    public function createosis(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'number' => 'required',
                'ketua' => 'required',
                'wakil' => 'required',
            ]
        );

        $imgNamed = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $path = 'banner/' . $imgNamed;
        $pathnamed = 'images/banner/' . $imgNamed;

        // Simpan gambar ke storage
        $request->file('image')->storeAs('public/images', $path);

        $credentials = [
            'number' => $request->number,
            'ketua' => $request->ketua,
            'wakil' => $request->wakil,
            'image' => $pathnamed
        ];

        Osis::create($credentials);



        return redirect()->route('admin.kandidat.osis');
    }
    public function creatempk(Request $request)
    {
        $request->validate(
            [
                'image' => 'required',
                'number' => 'required',
                'ketua' => 'required',
                'wakil' => 'required',
            ]
        );

        $imgNamed = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $path = 'banner/' . $imgNamed;
        $pathnamed = 'images/banner/' . $imgNamed;

        // Simpan gambar ke storage
        $request->file('image')->storeAs('public/images', $path);

        $credentials = [
            'number' => $request->number,
            'ketua' => $request->ketua,
            'wakil' => $request->wakil,
            'image' => $pathnamed
        ];

        Mpk::create($credentials);



        $mpk = Mpk::all();
        return redirect()->route('admin.kandidat.mpk');
    }
    public function kandidatmpk()
    {
        $mpk = Mpk::all();
        return view('admin/kandidat/mpk', compact('mpk'));
    }
   
}
