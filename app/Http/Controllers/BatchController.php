<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;
use App\Batch;
use DB;
use App\Recipe;

use App\Http\Requests;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batch = Batch::all();
        return view('batch/index', compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $B_quantity = $request->B_quantity;

        $IN_quantity = DB::table('batches')
            ->join('recipes', 'batches.R_id_FK', '=','recipes.R_id')
            ->join('inventories', 'inventories.IN_id', '=' , 'recipes.IN_id_FK')
            ->select('inventories.IN_quantity')->get();

        $final_quantity = $IN_quantity - $B_quantity;

        DB::table('batches')
            ->join('recipes', 'batches.R_id_FK', '=','recipes.R_id')
            ->join('inventories', 'inventories.IN_id', '=' , 'recipes.IN_id_FK')
            ->where('batches.R_id','=','recipes.R_id')
            ->where('inventories.IN_id','=','recipes.IN_id_FK')
            ->update(['inventories.IN_quantity' => $final_quantity]);


        $input = $request->all();

        Batch::create($input);

        return redirect('home/batch');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Batch::findOrFail($id);

        return view('batch.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Batch::findorFail($id);

        return view('batch.edit', compact('item'));
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
        $item = Batch::findOrFail($id);

//        $this->validate($request, [
//            'IN_name' => 'required'
//        ]);

        $input = $request->all();

        $item->fill($input)->save();

        //Session::flash('flash_message', 'Task successfully added!');

        return view('home/batch');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Batch::findOrfail($id);

        $item ->delete();

        return view('home/batch');
    }
}
