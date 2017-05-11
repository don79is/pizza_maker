<?php namespace App\Http\Controllers;



use App\Models\PMCheese;

class PMCheeseController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmcheese
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration ['list'] = PMCheese::get()->toArray();

        return view('admin.list', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmcheese/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmcheese
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmcheese/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pmcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pmcheese/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}