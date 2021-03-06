<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\Input;
use Validator;
use DB;
use App\Circle;
class CirclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $circles = Circle::all();
        return view('circles.index',compact('circles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       DB::enableQueryLog();
       DB::table('zones')->get();
       DB::table('circles')->get();
       DB::table('users')->get();
       DB::table('zones')
        ->where([
            ['zone_name','like','central'],
        ])
        ->orWhere([['id','Z01'],
    ])
       ->get();

       $log = DB::getQueryLog();
       //dd($log);
       dd(end($log));
       // dd(session());
        return view('circles.create');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Circle $circle)
    {
       $circle = Circle::find($circle->id);
        //dd($zone);
        return view('circles.show', ['circle'=>$circle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function formSubmit(TestRequest $indata)
    {
        // $this->validate($indata,[
        //     'fname' => 'required',
        //     'lname' => 'alpha',
        // ]);
       // $data = Input::get('fname');
      //  $data = Input::all();
      //  $data = $indata->get('fname');
      //  $data = $indata->all();
      //  $v = Validator::make($indata->all(),[
       //     'fname' => ['required']
       // ]);
        // if( $v->fails()){
        //     return back();
        // }
        // //dd($data);
        echo $indata->fname;
        echo $indata->lname;
    }
}
