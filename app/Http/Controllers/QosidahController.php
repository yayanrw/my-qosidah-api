<?php

namespace App\Http\Controllers;

use App\Models\Qosidah;
use App\Http\Requests\StoreQosidahRequest;
use App\Http\Requests\UpdateQosidahRequest;
use App\Http\Resources\QosidahDetailResource;
use App\Http\Resources\QosidahResource;
use App\Models\QosidahDetail;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;

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
        try {
            return $this->success(QosidahResource::collection(
                Qosidah::all()
            ));
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
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
        try {
            $request->validated($request->all());

            $qosidah = Qosidah::create([
                'title' => $request->title,
                'title_latin' => $request->title_latin,
                'title_translate' => $request->title_translate,
                'user_id' => Auth::user()->id,
            ]);

            return $this->success($qosidah);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function show(Qosidah $qosidah)
    {
        try {
            return $this->success(
                QosidahDetailResource::collection(
                    Qosidah::find($qosidah)
                )
            );
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
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
        try {
            $qosidah->update($request->all());
            return $this->success($qosidah);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qosidah  $qosidah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qosidah $qosidah)
    {
        try {
            $qosidah->delete();
            return $this->success();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage());
        }
    }
}
