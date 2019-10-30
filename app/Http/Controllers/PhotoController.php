<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;
use Mockery\Exception;

class PhotoController extends Controller
{
    /**
     * @var PhotoRepository
     */
    private $_photoRepo;

    public function __construct(PhotoRepository $photoRepository)
    {
        $this->_photoRepo = $photoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Photo $photo
     * @return void
     * @throws \Exception
     */
    public function destroy(Photo $photo)
    {
        $this->_photoRepo->delete($photo);
        return redirect()->back();
    }

    public function setPrimary(Photo $photo)
    {
        $previousPrimary = $this->_photoRepo->findPrimary($photo->mannequin_id);
        $this->_photoRepo->update(['is_primary' => true], $photo->id);
        try {
            if ($previousPrimary->id !== $photo->id) {
                $this->_photoRepo->update(['is_primary' => false], $previousPrimary->id);
            }
        } catch (\Exception $exception) {

        }
        return redirect()->back();
    }
}
