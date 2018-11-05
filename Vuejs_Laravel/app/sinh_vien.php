<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sinh_vien extends Model
{
    protected $table = 'sinh_vien';

    public $timestamps = false;

    protected $appends = ['ten_nganh'];

    protected $fillable = [
		'ho_ten',
		'gioi_tinh',
		'ngay_sinh',
		'ma_sv'
    ];
}
