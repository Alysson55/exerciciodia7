<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function order()
    {
        $bills = Client::orderBy('name', 'asc')->limit(2)->get();
        return response()->json($bills);
    }
}
