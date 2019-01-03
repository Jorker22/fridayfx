<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\fridayfx;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::select('select * from fridayfxes');
        return view('home',['users'=>$users]);
    }

    public function edit($id)
    {
        $users = fridayfx::find($id);
        return view('edit',compact('users', 'id'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'userID'    =>  'required',
            'status'     =>  'required'
        ]);
        $users = fridayfx::find($id);
        $users->userID = $request->get('userID');
        $users->status = $request->get('status');
        $users->save();
        return redirect()->route('home')->with('success', 'Data Updated');
    }
}
