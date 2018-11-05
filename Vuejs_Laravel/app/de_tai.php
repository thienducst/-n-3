<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class de_tai extends Model
{
    protected $table = 'de_tai';

    public $timestamps = false;
    protected $fillable = [
		'id',
		'ten_de_tai',
		'giang_vien_id',
		'nganh_id',
		'noi_dung',
		'pham_vi',
		'so_luong',
		'trang_thai'
    ];   
}
