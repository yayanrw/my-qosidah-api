<?php

namespace App\Http\Controllers;

use App\Models\QosidahDetail;
use App\Http\Requests\StoreQosidahDetailRequest;
use App\Http\Requests\UpdateQosidahDetailRequest;
use App\Traits\HttpResponses;

class QosidahDetailController extends Controller
{
    use HttpResponses;

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
     * @param  \App\Http\Requests\StoreQosidahDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQosidahDetailRequest $request)
    {
        try {
            $request->validated($request->all());

            $qosidah = QosidahDetail::create([
                'qosidah_id' => $request->qosidah_id,
                'line' => $request->line,
                'lyric' => $request->lyric,
                'lyric_latin' => $request->lyric_latin,
                'lyric_translate' => $request->lyric_translate,
            ]);

            return $this->success($qosidah);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QosidahDetail  $qosidahDetail
     * @return \Illuminate\Http\Response
     */
    public function show(QosidahDetail $qosidahDetail)
    {
        try {
            return $this->success($qosidahDetail);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QosidahDetail  $qosidahDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(QosidahDetail $qosidahDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQosidahDetailRequest  $request
     * @param  \App\Models\QosidahDetail  $qosidahDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQosidahDetailRequest $request, QosidahDetail $qosidahDetail)
    {
        try {
            $qosidahDetail->update($request->all());
            return $this->success($qosidahDetail);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QosidahDetail  $qosidahDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(QosidahDetail $qosidahDetail)
    {
        try {
            $qosidahDetail->delete();
            return $this->success();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }
}
