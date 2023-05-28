<?php

namespace App\Http\Controllers;

use App\Models\Formfillup;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    private $clients,$print;
    public function  index(){
        return view('admin.home.index');
    }
    public function  clientManage(){
        $this->clients  = Formfillup::all();
        return view('admin.client.manage',['clients'=> $this->clients ]);
    }
   
    public function print($id)
    {
        $this->print = Formfillup::find($id);
        return view('admin.client.print', ['print' => $this->print]);
    }

    public function edit(){
        return view('admin.updatepass.index');
       }
       public function update(Request $request){
        $request->validate([
            'password'=>'required|confirmed|string',
        ]);
    
        $user=User::find(Auth::id());
        $user->name=$request->name;
        $user->password=Hash::make($request->password);
        $user->save();
    
        return redirect()->back()->with('success','Profile successfully updated');
       }
}
