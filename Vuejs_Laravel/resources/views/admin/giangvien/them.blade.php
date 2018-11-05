@extends('admin.layouts.master')

@section('title')
	Trang thêm giảng viên
@endsection

@section('content')

	<form action="{{ route('giangvien.store') }}" method="post">
		{!! csrf_field() !!}
		Họ tên <input type="text" name="hoten">
		Email <input type="text" name="email">
		Mật khẩu <input type="text" name="matkhau">
		<button type="submit">Thêm </button>
	</form>
	</br>
	
@endsection
