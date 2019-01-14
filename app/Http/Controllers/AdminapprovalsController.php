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
use App\Employee;
use App\Designation;
use App\Salary;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Yajra\Datatables\Datatables;
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
      //     $scheme_id = '10001';
      // $schemedata = Scheme::where('id', '=', $scheme_id)->get();
      
      // return Datatables::of($scheme_id)
      //   ->addColumn('action',function($scheme_id){
      //       '<a onclick="showData('.$scheme_id->id.')" class="btn btn-sm btn-success">show</a>';
      //   })->make(true);
      // echo "<pre>";
      // print_r($schemedata);
      // exit();
      // dd($schemedata);
      //return response()->json($schemedata);
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
      //$circles = Designation::where('gpf_category', '=', $zone_id)->get();

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

    public function schemedata(){
     // $scheme_id = Input::get('scheme_id');
      $scheme_id = '10001';
      $schemedata = Scheme::where('id', '=', $scheme_id)->get();
      //dd($schemedata);
      return response()->compact($schemedata);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $approval = Adminapproval::create([
                'zone_id'           => $request->input('zone_cbo'),
                'circle_id'         => $request->input('circle_cbo'),
                'district_id'       => $request->input('district_cbo'),
                'block_id'          => $request->input('block_cbo'),
                'scheme_id'         => $request->input('scheme_cbo'),
                'approval_head'     => $request->input('component_cbo'),
                'approvaltype'      => $request->input('approvaltype_cbo'),
                'approvedby'        => $request->input('approvedby_cbo'),
                'admin_approval_no' => $request->input('admin_approval_no_txt'),
                'admin_approval_dt' => $request->input('admin_approval_dt_txt'),
                'amount'            => $request->input('admin_approval_amt_txt'),
                'wbank_amt'         => $request->input('wb_share_txt'),
                'nrdwp_amt'         => $request->input('nrdwp_share_txt'),
                'state_amt'         => $request->input('state_share_txt'),
                
       //         'division_id'       => $request->input('division-txt'),
        //         'subdivision_id'    => $request->input('subdivision-txt'),



        ]);

        $zones = Zone::all();
        return view('adminapprovals.create',compact('zones'))->with('success',
            'Record Saved Successfully');
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

    public function showRecord()
    {
      $employees = Employee::join('designations','designations.id','=','employees.designation_id')
                              ->join('salaries','salaries.emp_id', '=', 'employees.id')
                      ->selectRaw('designations.designation,
                                  designations.category,
                                  employees.id,
                                  employees.emp_name,
                                  employees.pan_card,
                                  salaries.gross_pay,
                                  salaries.month,
                                  salaries.income_tax'
                                  )
                      //->where('month','Oct')
                      ->get();
          //  return response($employees);
              return view('adminapprovals.employeelist', compact('employees'));        
    }

    public function mydesignations()
    {
      $id = Input::get('id');
      $designations = Designation::where('gpf_category', '=', $id)->get();
      return response()->json($designations);
    }  

}
