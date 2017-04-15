<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FinishedGood;
use PDF;

use App\Http\Requests;

class FinishedGoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finished_goods_report(){

        $report = FinishedGood::all();
        $pdf= PDF::loadView('finishedgood.fg_report', ['report'=>$report])->setPaper('a4','landscape');
        return $pdf->download('fg_report.pdf');



    }


    public function index()
    {
        $finishedgood = FinishedGood::all();
        return view('finishedgood/index', compact('finishedgood'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finishedgood.create');
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
        FinishedGood::create($input);
        return redirect('home/finishedgood');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = FinishedGood::findOrFail($id);
        return view('finishedgood.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = FinishedGood::findOrFail($id);

        return view('finishedgood.edit', compact('item') );
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
        $item = FinishedGood::findOrFail($id);

        $input = $request->all();

        $item->fill($input)->save();

        return redirect('home/finishedgood');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = FinishedGood::findOrFail($id);
        $item ->delete();
        return view('home/finishedgood');
    }
}
