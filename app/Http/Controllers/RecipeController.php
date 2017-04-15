<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use PDF;


use App\Http\Requests;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response`
     */

    public function recipe_report(){

        $report = Recipe::all();
        $pdf= PDF::loadView('recipe.r_report', ['report'=>$report])->setPaper('a4','landscape');
        return $pdf->download('r_report.pdf');



    }



    public function index()
    {
        $recipe= Recipe::all();

        return view('Recipe/index', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipe.create');
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




        Recipe::create($input);

        return redirect('home/recipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Recipe::findOrFail($id);

        return view('recipe.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Recipe::findorFail($id);

        return view('recipe.edit', compact('item'));
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
        $item = Recipe::findOrFail($id);


        $input = $request->all();

        $item->fill($input)->save();


        return view('recipe.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Recipe::findOrfail($id);

        $item ->delete();

        return view('home/recipe');
    }
}
