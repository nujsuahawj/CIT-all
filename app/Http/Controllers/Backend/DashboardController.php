<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ExportDoc;
use App\Models\ImportDoc;
use App\Models\LocalDoc;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $im_count = ImportDoc::where('del',0)->count();
        $ex_count = ExportDoc::where('del',0)->count();
        $local_count = LocalDoc::where('del',0)->count();
        $all_emp_count = Employee::where('del',0)->count();
        $woman_emp_count = Employee::where('del',0)->where('sex',2)->count();
        $product_count = DB::connection('mysql2')->table('products')->where('trash',0)->count();
        $user_count = User::where('del',0)->count();
        return view('backend.dashboard', compact('im_count','ex_count','local_count','all_emp_count','woman_emp_count','product_count','user_count'));
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
