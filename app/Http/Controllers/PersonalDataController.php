<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;

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
    }
}