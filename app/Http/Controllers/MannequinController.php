<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMannequinRequest;
use App\Mail\PendingModelMail;
use App\Models\Mannequin;
use App\Repositories\MannequinRepository;
use App\Repositories\PhotoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MannequinController extends Controller
{
    /**
     * @var MannequinRepository
     */
    private $_mannequinRepo;
    /**
     * @var PhotoRepository
     */
    private $_photoRepo;

    public function __construct(
        MannequinRepository $mannequinRepo,
        PhotoRepository $photoRepo
    ) {
        $this->_mannequinRepo = $mannequinRepo;
        $this->_photoRepo = $photoRepo;
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
     * @param StoreMannequinRequest $request
     * @return void
     */
    public function store(StoreMannequinRequest $request)
    {
        $mannequin = $this->_mannequinRepo->store($request->all());
        $this->_photoRepo->storeAll($request->allFiles(), $mannequin->id);
        Mail::to('test@test.com')->send(new PendingModelMail($mannequin));
        return redirect('/sign-up-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mannequin  $mannequin
     * @return \Illuminate\Http\Response
     */
    public function show(Mannequin $mannequin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mannequin  $mannequin
     * @return \Illuminate\Http\Response
     */
    public function edit(Mannequin $mannequin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mannequin  $mannequin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mannequin $mannequin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mannequin  $mannequin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mannequin $mannequin)
    {
        //
    }
}
