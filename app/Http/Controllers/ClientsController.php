<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ClientsController extends Controller
{

    public function sspList()
    {
        //$client = User::get();

        $client = DB::table('users as u')
        ->join('plans as pl', 'u.id_plans', '=', 'pl.id')
        ->get();
        return response()->json(['data' => $client]);
    }
}
