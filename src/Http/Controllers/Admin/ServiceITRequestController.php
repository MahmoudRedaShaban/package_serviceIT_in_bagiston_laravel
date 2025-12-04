<?php

namespace Webkul\ServiceIT\Http\Controllers\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\ServiceIT\DataGrids\Admin\ServiceITRequestControllerDataGrid;
use Webkul\ServiceIT\Repositories\ServiceITRepository;
use Webkul\ServiceIT\Repositories\ServiceItRequestRepository;

class ServiceITRequestController extends Controller
{
    public function __construct(protected ServiceItRequestRepository $serviceItRequestRepository, protected ServiceITRepository $service_itrepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datagrid(datagridClass: ServiceITRequestControllerDataGrid::class)->process();
        }

        return view('serviceit::admin.serviceitRequest.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show($id): View
    {
        $order = $this->serviceItRequestRepository->with('customer', 'service_it')->findOrFail($id);
        return view('serviceit::admin.serviceitRequest.view',compact('order'));
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
        $service = $this->serviceItRequestRepository->with('service_it')->findOrFail($id);
        $list = $this->service_itrepository->all();

        return view('serviceit::admin.serviceitRequest.edit', compact('service','list'));
    }

    /**
     * Update the specified resource in storage.TODO input





     */
    public function update(int $id, FormRequest $request)
    {
        $data = $request->validate([
            'order_id'=> 'numeric',
            'requirements' => 'string',
            'status' => 'string',
            'delivery_date' => 'date',
            'notes'=> 'string',
        ]);
        $data['requirements' ] = json_encode($data['requirements' ] );
        $this->serviceItRequestRepository->update($data, $id);
        return redirect()->route('admin.serviceitRequest.index')->with('message', 'Resource updated successfully.');
    }

    /**
     * Remove the specified resource from storage.TODO
     */
    public function destroy(int $id): JsonResponse
    {
        $this->serviceItRequestRepository->delete($id);

        return new JsonResponse([
            'message' => 'Resource deleted successfully.',
        ]);
    }
}
