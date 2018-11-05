@extends('admin.layouts.master')

@section('titlePage')
    Sinh viên
@endsection

@section('title')
	Danh sách sinh viên
@endsection

@section('content')

<table class="datatable mdl-data-table dataTable" cellspacing="0"
    width="100%" role="grid" style="width: 100%;">
    <thead>
        <tr>
            <th class="test">STT</th>
            <th class="test">Họ tên</th>
            <th class="test">Giới Tính</th>
            <th class="test">Ngày sinh</th>
            <th class="test">Mã sinh viên</th>
            <th class="test">Ngành</th>
            
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

@endsection

@section('css')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('js')
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script>
	    $(document).ready(function() {
	        $('.datatable').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: '{{ route('danhsach_sv') }}',
	            columns: [
                        { data: 'id'},
                        { data: 'ho_ten'},
                        { data: 'gioi_tinh'},
                        { data: 'ngay_sinh'},
                        { data: 'ma_sv'},
                        { data: 'ten_nganh'},
                     ],

	        });
	    });

	</script>
@endsection
@section('button')
    <a  href="{{ route('sinhvien.them_excel') }}" class="mb-xs mt-xs mr-xs btn btn-success">Thêm file excel</a>
    <a  href="{{ route('sinhvien.them') }}" class="mb-xs mt-xs mr-xs btn btn-success">Thêm</a>
@endsection
