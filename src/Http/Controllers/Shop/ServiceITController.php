<?php

namespace Webkul\ServiceIT\Http\Controllers\Shop;

use Illuminate\View\View;
use Webkul\Shop\Http\Controllers\Controller;

class ServiceITController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('serviceit::shop.index');
    }
}
