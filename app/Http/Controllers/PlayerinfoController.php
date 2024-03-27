<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerinfoController extends Controller
{
public function index() {
    return view('playerinfo.info');
}
}
