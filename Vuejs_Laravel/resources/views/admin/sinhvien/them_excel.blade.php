@extends('admin.layouts.master')

@section('titlePage')
	Sinh viên
@endsection

@section('title')
	Thêm sinh viên
@endsection

@section('content')
	<form action="{{ route('importExcel') }}"  method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
            <input type="file" name="file" />
			<p style="color: red"> {{ $errors->first('file') }} </p>
            <button class="btn btn-primary">Thêm file</button>
		
     </form>
@endsection
