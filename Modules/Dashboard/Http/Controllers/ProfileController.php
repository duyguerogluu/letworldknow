<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Dashboard\Http\Requests\ProfileRequest;
use Modules\Dashboard\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileController extends Controller
{
    private $repository;
    public function __construct(ProfileRepositoryInterface $profileRepository)
    {
        $this->repository = $profileRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('dashboard::index');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ProfileRequest $request)
    {
        return $this->repository->create($request->all());
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('dashboard::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('dashboard::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update($id,ProfileRequest $request)
    {

        return $this->repository->update($id,$request->all());

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
