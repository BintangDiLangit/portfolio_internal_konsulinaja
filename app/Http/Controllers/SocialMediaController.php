<?php

namespace App\Http\Controllers;

use App\Models\SosialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function index()
    {
        $sosialMedia = SosialMedia::where('user_id', auth()->user()->id)->first();
        return view('socialmedia.index', compact('sosialMedia'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $sosialMedia = SosialMedia::where('user_id', auth()->user()->id)->first();

        $sosialMedia->update([
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