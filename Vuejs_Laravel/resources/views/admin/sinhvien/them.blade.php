@extends('admin.layouts.master')

@section('titlePage')
	Sinh viên
@endsection

@section('title')
	Thêm sinh viên
@endsection

@section('content')
	<form id="add-new-student" action="#"  method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		 
		<div style="margin-bottom: 10px" class="row">
            <label class="col-md-2">Mã sinh viên:</label>
		     <input type="text" name="fullname" class="col-md-9" placeholder="eg:1500xxxx" required="">
		</div>
		<div style="margin-bottom: 10px" class="row">
            <label class="col-md-2">Họ và tên:</label>
		     <input type="text" name="fullname" class="col-md-9" placeholder="eg: Nguyễn văn A" required="">
		</div>
		<div style="margin-bottom: 10px" class="row">
			<label class="col-md-2">Giới tính:</label>
			<div class="radio-custom radio-primary col-md-1">
				<input id="awesome-nam" name="porto_is" type="radio" value="Nam" required="">
				<label for="awesome">Nam</label>
			</div>
			<div class="radio-custom radio-primary col-md-1">
				<input id="awesome-nu" name="porto_is" type="radio" value="Nữ" required="">
				<label for="awesome">Nữ</label>
			</div>
		</div>
		<div style="margin-bottom: 10px" class="row">
			<label class="col-md-2">Ngày sinh:</label>
			<div class="input-group col-md-9">
				<span class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</span>
				<input type="text" data-plugin-datepicker="" class="form-control">
			</div>
		</div>
		<div style="margin-bottom: 10px" class="row">
			<label class="col-md-2">Email:</label>
			<div class="input-group col-md-9">
				<span class="input-group-addon">
					<i class="fa fa-envelope"></i>
				</span>
				<input type="email" name="email" class="form-control" placeholder="eg.: email@gmail.com" required="">
			</div>
		</div>
		<div style="margin-bottom: 10px" class="row">
			<label class="col-md-2">Mật khẩu:</label>
			<div class="input-group col-md-9">
				<span class="input-group-addon">
					<span class="icon"><i class="fa fa-key"></i></span>
				</span>
				<input class="form-control" type="Password" placeholder="Mật khẩu">
			</div>	
		</div>
		<div style="margin-bottom: 10px" class="row">
			<label class="col-md-2">Di động:</label>
			
				<div class="input-group col-md-9">
					<span class="input-group-addon">
						<i class="fa fa-phone"></i>
					</span>
					<input id="phone" maxlength="10" placeholder="eg.: 0888899999" class="form-control">
				</div>
			

		</div>
		<div class="col-sm-4 col-sm-offset-1">
			<button class="btn btn-primary">Thêm</button>
		</div>
	</form>
<script type="text/javascript">
	$(document).ready(function () {
  //your code here

	
	$('#add-new-student').validate();
});
</script>
@endsection