<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaTableController extends Controller
{
    public function table () {
        return view ('la-table.la-table');
    }
}
