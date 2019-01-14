<?php

namespace App\Http\Controllers;

use App\Zone;
use App\Circle;
use App\District;
use App\Division;
use App\Motive;
use App\Employee;
use App\Designation;


use App\Gpfadvance;
use App\Http\Requests\GpfAdvanceValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GpfadvancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $gpfadvances = Gpfadvance::all()->paginate(15);
        $designations = DB::table('designations')
                    ->orderBy('id')
                    ->orderBy('designation')
                    ->get();                

                  //dd($gpfadvances);  
        return view('gpfadvances.index', compact('designations'));
    }

    public function showAdvance()
    {
        $gpfadvances = Gpfadvance::join('designations','designations.id','=','gpfadvances.emp_designation')->join('motives','motives.id','=','gpfadvances.motive')
                    ->selectRaw('designations.designation,
                                  gpfadvances.id,
                                  gpfadvances.year,
                                  gpfadvances.gpf_no,
                                  gpfadvances.emp_name,
                                  gpfadvances.amount,
                                  gpfadvances.refundable,
                                  motives.motive,
                                  gpfadvances.order_no,
                                  gpfadvances.order_dt
                                  ')
                    
                    ->orderBy('gpfadvances.emp_name')
                    ->get();

                     // ->orderBy('emp_name')
                     // ->orderBy('year')
                    
        // return response($gpfadvances);
                   // dd($gpfadvances);
        //$gpfadvances = Gpfadvance::all();
       //dd($gpfadvances);
        return view('gpfadvances.advanceslist',    compact('gpfadvances'));        
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $motives = Motive::all();
   //     return view('adminapprovals.addnew',compact('zones'));
        return view('gpfadvances.create',['motives'=>$motives]);
    }

    public function addrec()
    {
        $Gpfadvances = Gpfadvance::all();
        return view('gpfadvances.insertadvance',compact('Gpfadvances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GpfAdvanceValidation $request)
    {
        $advance = Gpfadvance::create([
            'approvedby'        => $request->input('approvedby_cbo'),
            'year'              => $request->input('sanction_year_cbo'),
            'category'          => $request->input('category_cbo'),
            'gpf_no'            => $request->input('gpf_no_txt'),
            'emp_name'          => $request->input('emp_name_txt'),
            'emp_designation'   => $request->input('designation_cbo'),
            'amount'            => $request->input('approved_amt_txt'),
            'refundable'        => $request->input('advance_type_cbo'),
            'motive'            => $request->input('reason_cbo'),
            'order_no'          => $request->input('order_no_txt'),
            'order_dt'          => $request->input('order_dt_txt'),
            'bill_no'           => $request->input('bill_no_txt'),
            'bill_dt'           => $request->input('bill_dt_txt'),
            'token_no'          => $request->input('token_no_txt'),
            'tr_voucher_no'     => $request->input('voucher_no_txt'),
            'tr_voucher_dt'     => $request->input('voucher_dt_txt'),
            'certificate'       => $request->input('certificate_cbo'),
            'certificate_no'    => $request->input('certificate_no_txt'),
            'certificate_dt'    => $request->input('certificate_dt_txt'),

]);

        $motives = Motive::all();
        return view('gpfadvances.create',compact('motives'))->with('success',
            'Record Saved Successfully');




        // if($request->ajax())
        // {
            
        //     $advance = Gpfadvance::create([
        //         'year'              => $request->input('year_id'),
        //         'category'          => $request->input('amount_id'),
        //         'gpf_no'            => $request->input('emp_gpf_no'),
        //         'emp_name'          => $request->input('emp_name'),
        //         'emp_designation'   => $request->input('designation_id'),
        //         'amount'            => $request->input('amount_id'),
        //         'refundable'        => $request->input('advtype_id'),
        //         'order_no'          => $request->input('order_no_id'),
        //         'order_dt'          => $request->input('order_dt_id'),
        //         'motive'            => $request->input('adv_motive'),
                
        
        // ]);
            


        // return response($advance);
        // $Gpfadvances = Gpfadvance::all();
        // return view('gpfadvances.index',compact('Gpfadvances'));
        // }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function show(Gpfadvance $gpfadvance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function edit(Gpfadvance $gpfadvance)
    {
        //
    }

    /** 
    */



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gpfadvance $gpfadvance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gpfadvance  $gpfadvance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gpfadvance $gpfadvance)
    {
        //
    }
        





}
