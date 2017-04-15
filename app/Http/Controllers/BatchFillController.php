<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BatchFill;

use App\Http\Requests;

class BatchFillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchfill = BatchFill::all();
        return view('batchfill/index', compact('batchfill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('batchfill/create');
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
        BatchFill::create($input);
        return redirect('home/batchfill');

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
        $item = BatchFill::findOrFail($id);
        return view('batchfill.edit', compact('item'));
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
        $item = BatchFill::findOrFail($id);

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
        $item = BatchFill::findOrfail($id);

        $item ->delete();

        return redirect('home/batchfill');
    }
}
