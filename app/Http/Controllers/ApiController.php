<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ApiController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /api
     *
     * @return Response
     */
    public function apiIndex()
    {
        return Response()->json(
            [

                'message' => 'HTTP Error 401'
            ],
                401);
    }

    /**
     * Show the form for creating a new resource.
     * GET /api/create
     *
     * @return Response
     */
    public function apiCreate()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /api
     *
     * @return Response
     */
    public function apiStore()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /api/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiShow($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /api/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function apiEdit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /api/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiUpdate($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function apiDestroy($id)
    {
        //
    }

}