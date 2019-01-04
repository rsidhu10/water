<?php
namespace App\Http\Controllers;

use App\Zone;
use App\Circle;
use App\District;
use App\Division;
use App\Subdivision;
use App\Block;
use App\Adminapproval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class DatafillController extends Controller
{
    public function zones()
    {
        $zones = Zone::all();
        dd($zones);
       // return view('adminapprovals.addnew',compact('zones'));
    }
}
