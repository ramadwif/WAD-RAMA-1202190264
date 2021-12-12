<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccine;

class controller_vaccine extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=new vaccine;
        return view('rama_vaccine', [
            "title" => "Vaccine",
        ], compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=new vaccine;
        return view('vaccine_input', [
            "title" => "Vaccine",
        ], compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new vaccine;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->description = $request->description;
        // $model-> gambar = $request->name;

        if ($request->file('images')){
            $file = $request->file('images');
            $nama_file= time().str_replace(" ","",$file->getClientOriginalName());
            $file->move('Images', $nama_file);
            $data->Images = $nama_file;
        }
        $data->save();

        return redirect('vaccine_list');
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
