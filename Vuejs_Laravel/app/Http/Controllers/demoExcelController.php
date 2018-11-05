<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sinh_vien;
use App\hoc_phan;
use App\hk_nk;
use App\nganh;
use App\hocphan_sinhvien;
use DB;
use Excel;
use Illuminate\Support\Facades\Input;
use App\Imports\Importer;
use Validator;


class demoExcelController extends Controller
{
  
    public function ImportSinhvien(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:xls'
        ]);
        $originalFile = (new Importer)->toArray(request()->file('file'));

        // mã lớp học
        $row_malop = 4; // Hàng chứa mã học phần
        $col_malop = 1; // Cột chứa mã học phần
        $start_malop = strpos($originalFile[0][$row_malop][$col_malop], ': ') + 2; // Tìm vị trí của ký tự ': ' rồi + thêm 2.
        $do_dai_ma_lop = 12; // Số ký tự của mã học phần
        $ma_lop = (substr($originalFile[0][$row_malop][1], $start_malop, $do_dai_ma_lop));// Cắt từ vị trí đã tìm thấy

        //tên lớp học 
        $start_tenlop = strpos($originalFile[0][4][1], ':') + 17 ;
        $ten_lop = (substr($originalFile[0][4][1], $start_tenlop));
        
        //mã học phần
        $start_mahp = strpos($originalFile[0][5][1], ':') + 2;
        $ma_hp = (substr($originalFile[0][5][1], $start_mahp, 10));
        
        //tên học phần
        $start_tenhp = strpos($originalFile[0][5][1], ':') + 15 ;
        $ten_hp = (substr($originalFile[0][5][1], $start_tenhp));
        
        //ngành
        $start_nganh = strpos($originalFile[0][6][1],' ') + 1;
        $ten_nganh = (substr($originalFile[0][6][1], $start_nganh));
        //học kì
        $start_hk = strpos($originalFile[0][4][5],')') +2 ;
        $hoc_ki = (substr($originalFile[0][4][5], $start_hk));
        //niên khóa
        $start_nk = strpos($originalFile[0][5][5],':') +2 ;
        $nien_khoa = (substr($originalFile[0][5][5], $start_nk));
        
         /* ------------------------------------------------- 
            Thêm dữ liệu vào hk_nk table
        */
            $modelHK_NK = new hk_nk();
            $modelHK_NK->hoc_ki = $hoc_ki;
            $modelHK_NK->nien_khoa = $nien_khoa;
            $modelHK_NK->save();
        /* ------------------------------------------------- 
            Thêm dữ liệu vào hoc_phan table
        */
            $modelhp = new hoc_phan();
            $modelhp->ma_hoc_phan =  $ma_hp;
            $modelhp->ten_hoc_phan = $ten_hp;
            $modelhp->ma_lop = $ma_lop;
            $modelhp->ten_lop = $ten_lop;
            $modelhp->hk_nk_id = $modelHK_NK->id;
            $modelhp->save();
        /* ------------------------------------------------- 
            Thêm dữ liệu vào nganh table
        */
            $modelNganh = new nganh();
            $modelNganh->ten_nganh = $ten_nganh;
            $modelNganh->save();
        //
        $dataToSave = array_slice($originalFile[0], 10);
        /* ------------------------------------------------- 
            Thêm dữ liệu vào sinh_vien table
        */

        foreach ($dataToSave as $sinh_vien) {
            if ($sinh_vien[0] != '' && !sinh_vien::where('ma_sv', $sinh_vien[1])->first()) {
                $modelsv = new sinh_vien();
                $modelsv_hp = new hocphan_sinhvien;

                $modelsv->ho_ten = $sinh_vien[2] . ' ' . $sinh_vien[3];
                $modelsv->gioi_tinh = $sinh_vien[4];
                $modelsv->ngay_sinh = $sinh_vien[5];
                $modelsv->ma_sv = $sinh_vien[1];
                $modelsv->ghi_chu = $sinh_vien[7];
                $modelsv->nganh_id = $modelNganh->id;
                $modelsv->save();

                $modelsv_hp->sinh_vien_id = $modelsv->id;
                $modelsv_hp->hoc_phan_id = $modelhp->id;
                $modelsv_hp->save();

            }
        }
         /* ------------------------------------------------- 
            Thêm dữ liệu vào hocphan_sinhvien table
        */
        return redirect()->back();

}}