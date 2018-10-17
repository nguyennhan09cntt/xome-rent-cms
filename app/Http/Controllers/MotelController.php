<?php


namespace App\Http\Controllers;


use App\Motel;
use Illuminate\Http\Request;


class MotelController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:motel-list');
         $this->middleware('permission:motel-create', ['only' => ['create','store']]);
         $this->middleware('permission:motel-edit', ['only' => ['edit','update']]);

 
         $this->middleware('permission:motel-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motels = Motel::latest()->paginate(5);
        return view('motels.index',compact('motels'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motels.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        Motel::create($request->all());


        return redirect()->route('motels.index')
                        ->with('success','Motel created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Motel  $motel
     * @return \Illuminate\Http\Response
     */
    public function show(Motel $motel)
    {
        return view('motels.show',compact('motel'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Motel  $motel
     * @return \Illuminate\Http\Response
     */
    public function edit(Motel $motel)
    {
        return view('motels.edit',compact('motel'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Motel  $motel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Motel $motel)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);


        $motel->update($request->all());


        return redirect()->route('motels.index')
                        ->with('success','Motel updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Motel  $motel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Motel $motel)
    {
        $motel->delete();


        return redirect()->route('motels.index')
                        ->with('success','Motel deleted successfully');
    }
}
