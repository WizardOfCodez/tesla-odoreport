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
        $odo_reports = OdoReport::select('user', 'odometer', 'updated_at')->whereYear('created_at', 2023)->orderBy('created_at')
            ->get();
        return view('odo', ['odo_reports' => $odo_reports->groupBy('user'), 'last_updated' => $odo_reports->max('updated_at')]);
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

        $date = Carbon::now();
        $existingReport = OdoReport::whereYear('created_at', "=", $date)
            ->where('user', $request->get('user'))
            ->whereMonth('created_at', "=", $date)
            ->first();


        if ($existingReport) {
            OdoReport::whereYear('created_at', "=", $date)
                ->whereMonth('created_at', "=", $date)->where('user', $request->get('user'))->update($request->all());
        } else {
            $newReport = new OdoReport($request->all());
            $newReport->save();
        }
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
