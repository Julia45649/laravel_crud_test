<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreEmployeer;
use App\Model\Employeer;
use DB;


class EmployeeController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('employeer.index', [
            'employees' => DB::table('employeers')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeer.create', compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreEmployeer  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeer $request)
    {
        $storeData = $request->all();
        $employee = Employeer::create($storeData);

        return redirect('/employee')->with('completed', 'Employee created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employeer.view', ['employee' => Employeer::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employeer::findOrFail($id);
        return view('employeer.update', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreEmployeer  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployeer $request, $id)
    {
        Employeer::find($id)->update($request->all());
        return redirect('/employee')->with('completed', 'Employee updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employeer::findOrFail($id);
        $employee->delete();

        return redirect('/employee')->with('completed', 'Employee deleted');
    }
}
