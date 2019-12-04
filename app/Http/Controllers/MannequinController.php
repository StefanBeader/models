<?php

namespace App\Http\Controllers;

use App\Enums\MannequinStatus;
use App\Http\Requests\AdminStoreMannequinRequest;
use App\Http\Requests\StoreMannequinRequest;
use App\Mail\PendingModelMail;
use App\Models\Category;
use App\Models\Mannequin;
use App\Repositories\MannequinRepository;
use App\Repositories\PhotoRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
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

    private $_viewDir = 'backend.mannequins.';

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
     * @return Response
     */
    public function index()
    {
        $models = $this->_mannequinRepo->findAllWithPagination();
        return view($this->_viewDir . 'index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view($this->_viewDir . 'create');
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
        Mail::to(config('mail.to.address'))->send(new PendingModelMail($mannequin));
        return redirect('/sign-up-success');
    }

    /**
     * Display the specified resource.
     *
     * @param Mannequin $mannequin
     * @return void
     */
    public function show(Mannequin $mannequin)
    {
        $photos = $mannequin->photos;
        return view(
            'backend.mannequins.show',
            compact('mannequin', 'photos')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Mannequin $mannequin
     * @return Response
     */
    public function edit(Mannequin $mannequin)
    {
        $statuses = MannequinStatus::$statuses;
        $mannequinCategories = $mannequin->categories()->get()->pluck('id')->toArray();
        $categories = Category::CATEGORIES;
        $photos = $mannequin->photos ?? [];
        return view(
            'backend.mannequins.edit',
            compact('mannequin', 'statuses', 'categories', 'mannequinCategories', 'photos')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function update(Request $request, int $id)
    {
        $this->_mannequinRepo->update($request->all(), $id);
        if ($request->categories) {
            $this->_mannequinRepo->storeMannequinToCategories($request->categories, $id);
        }
        if (!empty($request->photos)) {
            $this->_photoRepo->storeAll($request->photos, $id, 'book');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Mannequin $mannequin
     * @return void
     */
    public function destroy(Mannequin $mannequin)
    {
        //
    }

    /**
     * Store Mannequin by app admin
     * @param AdminStoreMannequinRequest $request
     * @return RedirectResponse|Redirector
     */
    public function addModel(AdminStoreMannequinRequest $request)
    {
        $this->_mannequinRepo->store($request->all());
        return redirect('/models');
    }
}
