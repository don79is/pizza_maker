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
        $configuration ['edit'] = 'app.ingredients.edit';
        $configuration ['delete'] = 'app.ingredients.delete';
        //dd($configuration);
        return view('admin.list', $configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmingredients/create
     *
     * @return Response
     */
    public function adminCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmingredients
     *
     * @return Response
     */
    public function adminStore()
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
    public function adminShow($id)
    {
        $configuration ['list'] = PMIngredients::find($id)->toArray();
        $configuration ['edit'] = 'app.ingredients.edit';
        $configuration ['delete'] = 'app.ingredients.delete';
        //dd($configuration);
        return view('admin.single', $configuration);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /pmingredients/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function adminEdit($id)
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
    public function adminUpdate($id)
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