<?php

namespace App\Http\Controllers;
use App\Zone;
use App\Circle;
use App\District;
use App\Division;
use App\Subdivision;
use App\Block;
use App\Scheme;

//use App\Estimate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class EstimatesController extends Controller
{
    public function create()
    {
        $zones = Zone::all();
        return view('estimates.create',compact('zones'));
       //return view('adminapprovals.create',['zones'=>$zones]);
    }

}
