<?php

namespace Webkul\ServiceIT\Http\Controllers\Shop;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Webkul\ServiceIT\Repositories\ServiceITRepository;
use Webkul\ServiceIT\Repositories\ServiceItRequestRepository;
use Webkul\Shop\Http\Controllers\Controller;

class ServiceITController extends Controller
{

    public function __construct(protected ServiceITRepository $service_itrepository,protected ServiceItRequestRepository $serviceItRequestRepository)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        if( Auth::guard('customer')->check()){
            $services =$this->serviceItRequestRepository->with('customer','service_it')->whereNot('customer_id_service', '!=', Auth::guard('customer')->id())->paginate(10);
        }else{
            $services = $this->service_itrepository->paginate(6);
        }
        return view('serviceit::shop.index', compact('services'));
    }
}
