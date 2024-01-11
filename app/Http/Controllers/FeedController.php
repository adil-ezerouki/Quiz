<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function getFeedView() {
        return view('feed');
    }
}
