<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dicker;

class DetailController extends Controller
{
    public function index($id)
    {
        $dicker = Dicker::findOrFail($id);
        return view('detail', ['dicker' => $dicker]);
    }
}
