<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function Homepage(Request $req){
        $data['items'] = Store::all();
        return view('homepage', $data);
    }
    public function Storepage(Request $req){
        return view('storepage');
    }
    public function Store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);
        $store = new Store;
        $store->name = $request->input('name');
        $store->email = $request->input('email');
        $store->phone = $request->input('phone');
        $store->save();
        return redirect()->route('homepage'); 
    }
}
