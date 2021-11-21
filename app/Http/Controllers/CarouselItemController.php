<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarouselItemRequest;
use App\Http\Requests\UpdateCarouselItemRequest;
use App\Models\CarouselItem;

class CarouselItemController extends Controller
{
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
     * @param  \App\Http\Requests\StoreCarouselItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarouselItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarouselItem  $carouselItem
     * @return \Illuminate\Http\Response
     */
    public function show(CarouselItem $carouselItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarouselItem  $carouselItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CarouselItem $carouselItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarouselItemRequest  $request
     * @param  \App\Models\CarouselItem  $carouselItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarouselItemRequest $request, CarouselItem $carouselItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarouselItem  $carouselItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarouselItem $carouselItem)
    {
        //
    }
}
