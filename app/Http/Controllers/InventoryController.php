<?php

namespace App\Http\Controllers;

use App\Inventory;
use App\LabTest;
use Illuminate\Http\Request;
use PDF;

use App\Http\Requests;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function inventory_report(){

        $report = Inventory::all();
        $pdf= PDF::loadView('inventory.in_report', ['report'=>$report])->setPaper('a4','landscape');
        return $pdf->download('in_report.pdf');



    }


    public function index()
    {
        $inventory= Inventory::all();

        return view('inventory/index', compact('inventory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Inventory::create($input);

        return redirect('home/inventory');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Inventory::findOrFail($id);

        return view('inventory.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Inventory::findorFail($id);

        return view('inventory.edit', compact('item'));
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


        $item = Inventory::findOrFail($id);

//        $this->validate($request, [
//            'IN_name' => 'required'
//        ]);

        $input = $request->all();

        $item->fill($input)->save();

        //Session::flash('flash_message', 'Task successfully added!');

        return $item;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Inventory::findOrfail($id);

        $item ->delete();

        return redirect('home/inventory');
    }
}
