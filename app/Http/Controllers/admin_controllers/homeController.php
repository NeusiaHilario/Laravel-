<?php

namespace App\Http\Controllers\admin_controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sync_temp_patients;



class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $search = request('search');
        $existe = preg_match('/\d/', $search);

        if(($existe)){
            $paciente = sync_temp_patients::where([
    
                ['patientid', 'like', '%'.$search.'%']
            ])->get();
       
           
        } elseif ($search) {
            $paciente = sync_temp_patients::where([
    
                ['firstnames', 'like', '%'.$search.'%']
            ])->get();
            
        }else {
            $paciente = sync_temp_patients::paginate(5);

        }
    
     
    
        return view('admin.home', ['pacientelista'=> $paciente, 'search' => $search]);
   

         
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    
}
