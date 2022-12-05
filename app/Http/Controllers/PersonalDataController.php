<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PersonalDataController extends Controller
{
    public function index()
    {
        $personalData = PersonalData::where('user_id', auth()->user()->id)->first();
        session()->flash('message', 'Personal Data');
        return view('personaldata.index', compact('personalData'));
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $personalData = PersonalData::where('user_id', auth()->user()->id)->first();
        if (!empty($data['avatar_hidden'])) {
            $image = $data['avatar_hidden'];

            $string = "abcdefghijklmnopqrstuvwxyz123456789";
            list($file, $type) = explode('/', $data['avatar_hidden_type'], 2);
            $saveName = str_shuffle($string) . '.' . $type;

            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace('data:image/jpeg;base64,', '', $image);
            $image = str_replace('data:image/jpg;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = $saveName;
            $path =  '/berkas/profil/' . $saveName;
            $savePath = public_path() . '/berkas/profil/';

            if ($data['avatar_hidden'] != '') {
                File::put($savePath . $imageName, base64_decode($image));
            }
        }

        $personalData->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'introduction' => $data['introduction'],
            'job' => $data['job'],
            'years_experience' => $data['years_experience']
        ]);

        if (!empty($data['avatar_hidden'])) {
            $personalData->update([
                'photo' => $path,
            ]);
        }

        return redirect()->back();
    }
}