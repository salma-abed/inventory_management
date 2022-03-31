<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\places;

class placesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $Object = new places();
        $Object->place_name = strip_tags($request->input('Warehouse_name'));
        
  
        if(isset($Object->place_name))
        {
            $request->validate([
                'Warehouse_name'=> 'required',
                'Warehouse_address'=>'required',

            ]);

            //POST
            

            $Object->place_type = "warehouse";
            $Object->place_name = strip_tags($request->input('Warehouse_name'));
            $Object->place_address = strip_tags($request->input('Warehouse_address'));
            $Object->save();

        }
        // $Object->place_name = strip_tags($request->input('Printing_house_name'));

        // if(isset($Object->place_name))
        // {
        //     $request->validate([
        //         'Printing_house_name'=> 'required',
        //         'Printing_house_address'=>'required',

        //     ]);

        //     //POST
            
        //     $Object->place_type = "printinghouse";
        //     $Object->place_name = strip_tags($request->input('Printing_house_name'));
        //     $Object->place_address = strip_tags($request->input('Printing_house_address'));
        //     $Object->save();

        // }
            return back(); //basically refreshes after data is sent.

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
