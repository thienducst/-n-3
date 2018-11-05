<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giang_vien extends Model
{
	public $timestamps = false;

    protected $table = 'giang_vien';
	protected $fillable = [
		'id',
		'ho_ten',
		'mat_khau',
		'email',
		'sdt'
    ];
}
