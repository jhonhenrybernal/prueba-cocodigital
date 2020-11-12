<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PlansController extends Controller
{
    public function sspMi(){
        return response()->json(['plans' => Plans::all(),'actual' => Auth::user()['id_plans']]);
    }

    public function planSelect($id){
        try {
            $user =  User::find(Auth::id());
            $user->id_plans = (int)$id;
            $user->save();
            return response()->json(['status' => true]);
        } catch (\Throwable $th) {
            return response()->json(['status' => $th->getMessage()]);
        }
    }

    public function sspList()
    {
        $plan = Plans::get();
        return response()->json($plan);
    }

    public function add(Request $request){
        $plan = new Plans();
        $plan->type = $request['tipo'];
        $plan->value = $request['valor'];
        $plan->cant = $request['cant'];
        $plan->save();

        $plan = Plans::get();
        return response()->json($plan);

    }
}
