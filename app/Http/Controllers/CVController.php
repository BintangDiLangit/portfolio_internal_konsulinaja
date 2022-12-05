<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index()
    {
        $cv = CV::where('user_id', auth()->user()->id)->first();
        return view('cv.index', compact('cv'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $cv = CV::where('user_id', auth()->user()->id)->first();

        $cv->update([
            'linkedin' => $data['linkedin'],
            'instagram' => $data['instagram'],
            'dribble' => $data['dribble'],
            'medium' => $data['medium'],
            'youtube' => $data['youtube'],
            'tiktok' => $data['tiktok'],
            'github' => $data['github'],
            'gitlab' => $data['gitlab'],
            'bitbucket' => $data['bitbucket']
        ]);

        return redirect()->back();
    }
}