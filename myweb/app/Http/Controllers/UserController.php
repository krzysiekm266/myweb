<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

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
    public function update(Request $request)
    {
        if($request->new_email !== $request->new_email_confirm)
        {
            return back()->withErrors(['email_error' =>  __('E-mails should be the same!') ]);
        }
       $usr =  User::where('name','=','admin')->first();
       $usr->email = $request->new_email;
       $usr->save();

       return redirect()->intended('panel')->withErrors(['sucess' => __('E-mail changed.') ]) ;
    }


}
