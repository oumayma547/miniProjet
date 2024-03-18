<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\UsersController;

use App\Models\User;
use App\Models\Task;
use App\Models\Status;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users =User::all();

        return view('dashboard.admin.home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response

     */
    public function edit($user,Request $request)
    {
        $user = User::find($user);
      
        

if ($user){

        $request->validate([
            'name' =>'required|min:4|string|max:255',
            'email'=>'required|email|string|max:255'
        ]);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return redirect()->route('admin.home')->with('success', 'User deleted successfully.');;
    
    }}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($user)
    {
        $user = User::find($user);
      
        

        if ($user){
        
            return view ('dashboard.admin.edit',[ 'user' => User::find($user->id)]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $user = User::find((int)$id);
        $user->delete();
        return redirect()->route('admin.home')->with('success', 'User deleted successfully.');;
    }



  

 



    
}
