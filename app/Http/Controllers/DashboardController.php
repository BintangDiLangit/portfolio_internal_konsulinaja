<?php

namespace App\Http\Controllers;

use App\Models\PersonalData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $personalData = PersonalData::where('user_id', auth()->user()->id)->first();
        return view('dashboard', compact('personalData'));
    }
}