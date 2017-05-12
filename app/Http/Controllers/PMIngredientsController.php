<?php namespace App\Http\Controllers;


use App\Models\PMIngredients;

class PMIngredientsController extends BaseAPIController
{

    /**
     * Display a listing of the resource.
     * GET /pmingredients
     *
     * @return Response
     */
    public function adminIndex()
    {
        $configuration ['list'] = PMIngredients::get()->toArray();
        $configuration ['route'] = 'app.ingredients.delete';
        //dd($configuration);
        return view('admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmingredients/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmingredients
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /pmingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmingredients/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /pmingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /pmingredients/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function adminDestroy($id)
    {
        PMIngredients::destroy($id);
    }

}