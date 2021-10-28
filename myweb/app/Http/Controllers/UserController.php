<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request)
    {
        $this->authorize('update',User::class)->deny('You are not allowed to update user Email');;

        $user =  User::where('id',Auth::user()->id)->first();
        $user->email = $request->input('new_email');
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->route('panel')->withErrors(['sucess' => __('User '. Auth::user()->name .' profile updated.') ]) ;
    }

    /**
     * Update only email
     *
     */
    public function updateEmail(UserRequest $request)
    {
        $this->authorize('update',User::class)->deny('You are not allowed to update user Email');;

        $user =  User::where('id',Auth::user()->id)->first();
        $user->email = $request->input('new_email');
        $user->save();

        return redirect()->route('panel')->withErrors(['sucess' => __('E-mail changed.') ]) ;
    }

    /**
     * Update only password
     *
     */
    public function updatePassword(UserRequest $request)
    {
        $this->authorize('update',User::class)->deny('You are not allowed to update user Password');

        $user =  User::where('id',Auth::user()->id)->first();
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return redirect()->intended()->withErrors(['sucess' => __('Password changed.') ]) ;
    }

}
