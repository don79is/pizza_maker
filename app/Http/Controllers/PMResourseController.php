<?php namespace App\Http\Controllers;

use App\Models\PMResource;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Routing\Controller;

class PMResourseController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /pmresourse
     *
     * @return Response
     */
    public function index()
    {
        //
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
        //
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

    public function upload( UploadedFile $file)
    {
        $data =
            [
                "size" => $file->getSize(),
                "mime_type" => $file->getMimeType(),
            ];
        $path = 'upload/' . date("Y/m/d");
        $fileName = Carbon::now()->timestamp . '_' . $file->getClientOrginalName();
        $file->move(public_path($path), $fileName);

        $data['path'] = $path . $fileName;

        return PMResource::create($data);

    }
}