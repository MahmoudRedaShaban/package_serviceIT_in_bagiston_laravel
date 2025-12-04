<?php

namespace Webkul\ServiceIT\Http\Controllers\Admin;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Webkul\Admin\Http\Controllers\Controller;
use Webkul\ServiceIT\DataGrids\Admin\ServiceITDataGrid;
use Webkul\ServiceIT\Http\Requests\ServiceITRequest;
use Webkul\ServiceIT\Repositories\ServiceITRepository;

class ServiceITController extends Controller
{
    public function __construct(protected ServiceITRepository $service_itrepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
             return datagrid(ServiceITDataGrid::class)->process();
        }
        // ToDO Controle Cred And Request And USer  and complet part
        return view('serviceit::admin.serviceit.index');
    }

    public function show($id)
    {
        try {
            $service = $this->service_itrepository->findOrFail($id);
            return view('serviceit::admin.serviceit.view', compact('service'));
        } catch (Exception $e) {
            return back()->with('error', 'Service not found.');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('serviceit::admin.serviceit.create');
    }

    /**
     * Store a newly created Service in storage.
     */
    public function store(ServiceITRequest $serviceITRequest)
    {

        $data = $serviceITRequest->validated();
        $data['slug'] = Str::slug($data['name']);

        $this->service_itrepository->create($data);

        return redirect()->route('admin.serviceit.index')->with('message', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified Service.
     */
    public function edit(int $id): View
    {
        $service = $this->service_itrepository->findOrFail($id);

        return view('serviceit::admin.serviceit.edit', compact('service'));
    }

    /**
     * Update the specified Service in storage.
     */
    public function update(int $id, ServiceITRequest $serviceITRequest)
    {
        try {
            $data = $serviceITRequest->validated();
            $data['slug'] = Str::slug($data['name']);
            $this->service_itrepository->update($data, $id);

            return redirect()->route('admin.serviceit.index')->with('message', 'Service updated successfully.');
        } catch (Exception $th) {
            return back()->with('error', 'Service update failed.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        try {
            $this->service_itrepository->delete($id);
            return new JsonResponse([
            'message' => 'Service deleted successfully.',
        ]);
        } catch (Exception $th) {
            return back()->with('error', 'Service Delete failed.');
        }
    }

}
