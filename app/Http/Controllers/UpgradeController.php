<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function index()
    {
        return view('layouts.upgrade.index');
    }
}
