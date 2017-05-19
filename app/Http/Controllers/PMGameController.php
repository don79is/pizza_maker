<?php namespace App\Http\Controllers;


use App\Models\PMUsersResourceConn;
use Illuminate\Routing\Controller;

class PMGameController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /pmresourse
     *
     * @return Response
     */
    public function index()
    {

        return view('front-end.game');
    }

    /**
     * Show the form for creating a new resource.
     * GET /pmresourse/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /pmresourse
     *
     * @return Response
     */
    public function store()
    {
        $resource = request()->file('image');
        $uploadController = new PMResourseController();
        $record = $uploadController->upload($resource);
        PMUsersResourceConn::create([
            "user_id" => auth()->user()->id,
            "resource_id" => $record->id

    ]);


       // return view('front-end.game');
    }

    /**
     * Display the specified resource.
     * GET /pmresourse/{id}
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
     * GET /pmresourse/{id}/edit
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
     * PUT /pmresourse/{id}
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
     * DELETE /pmresourse/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param UploadedFile $dfile
     */


}