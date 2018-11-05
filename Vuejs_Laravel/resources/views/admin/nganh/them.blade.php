@extends('admin.layouts.master')

@section('titlePage')
	Ngành
@endsection

@section('title')
	Thêm ngành học
@endsection

@section('content')
	<form action="{{ route('importExcel') }}"  method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		 
		<div style="margin-bottom: 10px" class="row">
            <label class="col-md-2">Tên ngành:</label>
		     <input type="text" name="fullname" class="col-md-9" placeholder="vd: Hệ thống thông tin" required="">
		</div>
		<div class="col-sm-4 col-sm-offset-1">
			<button  class="btn btn-primary">Thêm</button>
		</div>

@endsection