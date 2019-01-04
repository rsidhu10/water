<?php

namespace App\Http\Controllers;
use App\Zone;
use App\Circle;
use App\District;
use App\Division;
use App\Subdivision;
use App\Block;
use App\Scheme;
use App\Adminapproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdminapprovalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::all();
        return view('adminapprovals.index',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::all();
   //     return view('adminapprovals.addnew',compact('zones'));
        return view('adminapprovals.create',['zones'=>$zones]);
    }

    public function newcircles()
    {
        $zone_id = Input::get('zone_id');
        $circles = Circle::where('zone_id','=', $zone_id)->get();
        //dd($circles);
        return view('adminapprovals.create',compact('circles'));
       // return view('adminapprovals.create',['zones'=>$zones]);
    }

    public function circles(){
      $zone_id = Input::get('zone_id');
      $circles = Circle::where('zone_id', '=', $zone_id)->get();
      return response()->json($circles);
    }

    public function districts(){
      $circle_id = Input::get('circle_id');
      $districts = District::where('circle_id', '=', $circle_id)->get();
      return response()->json($districts);
    }

    public function blocks(){
      $district_id = Input::get('district_id');
      $blocks = Block::where('district_id', '=', $district_id)->get();
      return response()->json($blocks);
    }

    public function schemes(){
      $block_id = Input::get('block_id');
      $schemes = Scheme::where('block_id', '=', $block_id)->get();
      return response()->json($schemes);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Adminapproval  $adminapproval
     * @return \Illuminate\Http\Response
     */
    public function show(Adminapproval $adminapproval)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Adminapproval  $adminapproval
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminapproval $adminapproval)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Adminapproval  $adminapproval
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminapproval $adminapproval)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Adminapproval  $adminapproval
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminapproval $adminapproval)
    {
        //
    }
}
