<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateReceipeRequest;
use Illuminate\Http\Request;

use App\Models\Receipe;
use App\Http\Resources\ReceipeResource;
use App\Http\Resources\ReceipeCollection;
use App\Models\Ingredient;
use App\Models\ReceipeSteps;

class ReceipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ReceipeCollection(Receipe::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return new ReceipeResource(Receipe::with(['steps','ingredients'])->where('id', '=', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReceipeRequest $request, string $id)
    {
        $receipe = Receipe::with(['steps', 'ingredients'])->findOrFail($id);

        //fill submitted receipe updates
        $receipe->fill($request->all());

        //TODO: refactor with below - DRY
        //fill submitted receipe step updates
        $steps = $request->get('steps',[]);
        foreach ($steps as $key => $stepvalues) {
            $step = ReceipeSteps::findOrfail($stepvalues['id']);
            $step->fill($stepvalues);
            $receipe->steps[$key] = $step;
        }

        //TODO: refactor with above - DRY
        //fill submitted receipe ingredient updates
        $ingredients = $request->get('ingredients',[]);
        foreach ($ingredients as $key => $ingredientvalues) {
            $ingredient = Ingredient::findOrfail($ingredientvalues['id']);
            $ingredient->fill($ingredientvalues);
            $receipe->ingredients[$key] = $ingredient;
        }

        //save receipe model and relations (steps/ingredients)
        $result = $receipe->push();

        if ($result) {
            $receipe->refresh();
            return response(new ReceipeResource($receipe), 200);
        } else {
            return response()->json(['Error', 500]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
