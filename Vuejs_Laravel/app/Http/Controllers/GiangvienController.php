<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\giang_vien;
use Validator;
use Datatables;

class GiangvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return giang_vien::paginate(4);
       return Datatables::of(giang_vien::query())->make(true);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('admin.giangvien.them');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $giangvien = new giang_vien();
        $giangvien->ho_ten = $request->hoten;
        $giangvien->mat_khau = $request->matkhau;
        $giangvien->email = $request->email;
        // dd($giangvien);
        $giangvien->save();

        // return response('giangvien', $giangvien);
        return response()->json($giangvien);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
