<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class DonationController extends Controller
{
public function index() {
    return view('donate.donation');
}

}
