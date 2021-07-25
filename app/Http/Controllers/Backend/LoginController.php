<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.login');
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
        $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ],[
            'phone.required' => 'ກະລຸນາໃສ່ເບີໂທກ່ອນ!',
            'password.required' => 'ກະລຸນາໃສ່ລະຫັດກ່ອນ!'
        ]);
        if(Auth::attempt([
            'phone'=>$request->phone,
            'password'=>$request->password
        ]))
        {
            //auth()->user()->assignRole('admin');
            return redirect()->route('dashboard.index')->with('success','ເຂົ້າລະບົບສຳເລັດ!');;
        }
        else
        {
            return redirect()->back()->with('message','ເບີໂທ ຫຼື ລະຫັດຜ່ານບໍ່ຖື! ກະລຸນາກວດຄືນໃໝ່');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginadmincit.index');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
