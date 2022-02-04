<?php

namespace App\Http\Controllers;

use App\Models\OdoReport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OdoReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $odo_reports = OdoReport::select('user', 'odometer', 'updated_at')->orderBy('created_at')
            ->get();
        return view('odo', ['odo_reports' => $odo_reports->groupBy('user')]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = new \DateTime();

        OdoReport::updateOrCreate(
            ['user' => $request->get('user'),'created_at' => $date->format("Y-m-d")],
            $request->all()
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OdoReport  $odoReport
     * @return \Illuminate\Http\Response
     */
    public function show(OdoReport $odoReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OdoReport  $odoReport
     * @return \Illuminate\Http\Response
     */
    public function edit(OdoReport $odoReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OdoReport  $odoReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OdoReport $odoReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OdoReport  $odoReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(OdoReport $odoReport)
    {
        //
    }
}