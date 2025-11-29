<?php

namespace Webkul\ServiceIT\Http\Controllers\Admin;

use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;

class ServiceITController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        if (request()->ajax()) {
            // return datagrid(ServiceITControllerDataGrid::class)->process();
        }

        return view('serviceit::admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('serviceit::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(): JsonResponse
    {
        // Add your store logic here
        
        return new JsonResponse([
            'message' => 'Resource created successfully.',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id): View
    {
        // $resource = $this->repository->findOrFail($id);

        return view('serviceit::admin.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(int $id): JsonResponse
    {
        // Add your update logic here
        
        return new JsonResponse([
            'message' => 'Resource updated successfully.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        // Add your destroy logic here
        
        return new JsonResponse([
            'message' => 'Resource deleted successfully.',
        ]);
    }
}
