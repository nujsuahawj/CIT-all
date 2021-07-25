<?php

namespace App\Http\Controllers\Backend\Doc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DocType;

class DocumentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doc_type = DocType::where('del',0)->get();
        return view('backend.document.doctype.index', compact('doc_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.document.doctype.create');
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
            'name' => 'required'
        ],[
            'name.required'=>'ໃສ່ຊື່ປະເພດເອກະສານກ່ອນ!'
        ]);
        DocType::create($request->all());
        return redirect()->route('doc_type.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເລັດ!');
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
        $doc_type = DocType::find($id);
        return view('backend.document.doctype.edit', compact('doc_type'));
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
        $doc_type = DocType::find($id);
        $request->validate([
            'name' => 'required'
        ],[
            'name.required'=>'ໃສ່ຊື່ປະເພດເອກະສານກ່ອນ!'
        ]);
        $doc_type->update($request->all());
        return redirect()->route('doc_type.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເລັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doc_type = DocType::find($id);
        $doc_type->del = 1;
        $doc_type->save();
        return redirect()->route('doc_type.index')->with('success','ລຶບຂໍ້ມູນສຳເລັດ!');
    }
}
