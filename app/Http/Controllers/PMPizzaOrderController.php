<?php namespace App\Http\Controllers;


use App\Models\PMPad;

class PMPizzaOrderController extends BaseAPIController {

	/**
	 * Display a listing of the resource.
	 * GET /pmpizzaorder
	 *
	 * @return Response
	 */
	public function adminIndex()
	{
        return view('admin.list');
	}

    public function index()
    {
        return view('user.list');
    }
	/**
	 * Show the form for creating a new resource.
	 * GET /pmpizzaorder/create
	 *
	 * @return Response
	 */
	public function adminCreate()
	{

	}

    public function create()
    {


    }

	/**
	 * Store a newly created resource in storage.
	 * POST /pmpizzaorder
	 *
	 * @return Response
	 */
	public function adminStore()
	{
		//
	}

    public function store()
    {
        //
    }

	/**
	 * Display the specified resource.
	 * GET /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminShow($id)
	{
        return view('admin.single');
	}

    public function show($id)
    {
        return view('user.single');
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /pmpizzaorder/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminEdit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminUpdate($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /pmpizzaorder/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function adminDestroy($id)
	{
		//
	}

}