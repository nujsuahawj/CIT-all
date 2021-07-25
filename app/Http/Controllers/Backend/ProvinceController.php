<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Province;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro = DB::table('provinces')->where('del',0)->get();
        return view('backend.settings.province.index', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.province.create');
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
            'code' => 'required',
            'name' => 'required'
        ],[
            'code.required' => 'ກະລຸນາໃສ່ລະຫັດແຂວງກ່ອນ!',
            'name.required' => 'ກະລຸນາໃສ່ຊື່ແຂວງກ່ອນ!'
        ]);
        Province::create($request->all());
        return redirect()->route('province.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ!');
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
        $pro = Province::find($id);
        return view('backend.settings.province.edit',compact('pro'));
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
        $pro = Province::find($id);
        $request->validate([
            'code' => 'required',
            'name' => 'required'
        ],[
            'code.required' => 'ກະລຸນາໃສ່ລະຫັດແຂວງກ່ອນ!',
            'name.required' => 'ກະລຸນາໃສ່ຊື່ແຂວງກ່ອນ!'
        ]);
        
        $pro->update($request->all());
        return redirect()->route('province.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເລັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Province::find($id);
        $pro->del = 1;
        $pro->save();
        return redirect()->route('province.index')->with('success','ທ່ານໄດ້ລຶບຂໍ້ມູນສຳເລັດ!');
    }
}
