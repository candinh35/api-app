<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeRequest;
use App\Service\HomeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends BaseController
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        parent::__construct();
        $this->homeService = $homeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(HomeRequest $request)
    {
        $products = $this->homeService->getPaged();
        if ($products->count() <= 0) {
            return response()->json([
                'code' => 1,
                'message' => 'Product empty!'
            ]);
        }
        return response()->json([
            'code' => 0,
            'products' => $products,
        ]);
    }

    public function getBanner()
    {
        $banners = $this->homeService->getPaged();
        if ($banners->count() <= 0) {
            return response()->json([
                'code' => 1,
                'message' => 'Product empty!'
            ]);
        }
        return response()->json([
            'code' => 0,
            'products' => $banners,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
