<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin_login ()
    {
        return view('admin.index');
    }

    public function admin_auth(Request $request)
    {
        $data = admin::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {

                //session create
                session()->put('aname', $data->name);
                session()->put('aid', $data->id);
             
                // create cookie
                if(isset($request->remember))
                {
                    setcookie('ecookie',$data->email,time()+60); // second
                    Cookie::queue(Cookie::make('pcookie',$request->password,1)); // minutes
                }

                Alert::success('Login Success', "Admin Login Successful");
                return redirect('/dashboard');
            } else {
                Alert::error('Login Failed', "Password Doesn't Not Match");
                return redirect('/admin_login');
            }
        } else {
            Alert::error('Login Failed', "Email Doesn't Exist");
            return redirect('/admin_login');
        }
    }

    function admin_logout()
    {
        session()->pull('aname');
        session()->pull('aid');
        Alert::success('Logout Success', "Admin Logout Successful");
        return redirect('/admin_login');
    }



    public function index()
    {
        //
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
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
}
