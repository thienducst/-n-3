<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Resources\sinh_vien as sinh_vienResource;
use App\sinh_vien;
use App\nganh;
use DB;
use Validator;
use Datatables;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword =  $request->search['value'];
        $sinh_vien =DB::table('sinh_vien')
            ->select(['sinh_vien.id', 'ho_ten', 'gioi_tinh', 'ngay_sinh', 'ma_sv', 'ten_nganh'])
            ->join('nganh', 'nganh.id', '=', 'sinh_vien.nganh_id')
            ->where('ten_nganh', 'like', '%' . $keyword . '%')
            ->orwhere('ho_ten', 'like', '%' . $keyword . '%')
            ->orwhere('gioi_tinh', 'like', '%' . $keyword . '%')
            ->orwhere('ngay_sinh', 'like', '%' . $keyword . '%')
            ->orwhere('ma_sv', 'like', '%' . $keyword . '%')
            ->get();

       return Datatables::of($sinh_vien)->make();
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
        
        $sinh_vien = sinh_vien::find($id);
        if( $sinh_vien != null){
            $sinh_vien->delete();
            
            return response()->json([
                'status' => 'ok'
            ]);
        } else {
            abort(404);
        }
    }
}
