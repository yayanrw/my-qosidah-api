<?php

namespace App\Http\Controllers;

use App\Models\Qosidah;
use App\Http\Requests\StoreQosidahRequest;
use App\Http\Requests\UpdateQosidahRequest;
use App\Http\Resources\QosidahResource;
use App\Traits\HttpResponses;

class QosidahController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->success(QosidahResource::collection(
            Qosidah::all()
        ));
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
     * @param  \App\Http\Requests\StoreQosidahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQosidahRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function show(Qosidah $qosidah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function edit(Qosidah $qosidah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQosidahRequest  $request
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQosidahRequest $request, Qosidah $qosidah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qosidah $qosidah)
    {
        //
    }
}
