<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class searchBoardController extends Controller
{
    public function showTable(){
        $data = DB::table('users')->select(DB::raw('uu_id, CONCAT(first_name," ",last_name) AS name, email'))->paginate(2);
        return view('searchBoard', ['data'=>$data]);
    }

    public function searchTable(Request $request){
        $data = Http::get("domain.com/api/".$request->searchInput)->json();
        return view('searchBoard', compact('data', $data));
    }

    public function apiSearch($str = null){
        return $data = $str ? User::where('first_name','LIKE','%'.$str.'%')->orWhere('last_name','LIKE','%'.$str.'%')->orWhere('email','LIKE','%'.$str.'%')->orWhere('uu_id','LIKE','%'.$str.'%')->paginate(2) : DB::table('users')->select(DB::raw('uu_id, CONCAT(first_name," ",last_name) AS name, email'))->paginate(2);
    }
}
