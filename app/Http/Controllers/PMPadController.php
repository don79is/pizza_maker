<?php namespace App\Http\Controllers;



use App\Models\PMPad;

class PMPadController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmpad
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        $configuration ['list'] = PMPad::get()->toArray();

        return view('admin.list', $configuration);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /pmpad/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /pmpad
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /pmpad/{id}
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
	 * GET /pmpad/{id}/edit
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
	 * PUT /pmpad/{id}
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
	 * DELETE /pmpad/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}