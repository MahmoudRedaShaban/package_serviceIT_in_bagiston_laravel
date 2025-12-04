<?php

namespace Webkul\ServiceIT\Http\Controllers\Shop;

use Illuminate\Support\Facades\Auth;
use Webkul\ServiceIT\Repositories\ServiceITRepository;
use Webkul\ServiceIT\Repositories\ServiceItRequestRepository;
use Webkul\Shop\Http\Controllers\Controller;

class ServiceITRequestController extends Controller
{

    public function __construct(protected ServiceItRequestRepository $serviceItRequestRepository, protected ServiceITRepository $service_itrepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function store($id)
    {
       $service = $this->service_itrepository->findOrFail($id);
        $customerId = Auth::guard('customer')->id() | 1;
           $this->serviceItRequestRepository->create([
                    'customer_id_service' => $customerId,
                    'id_service_it' => $service->id,
                    'delivery_date' => now()->addDays(5)->format('D M Y H:i'),
                    'notes' => ''
            ]);
            return  back();
    }
}
