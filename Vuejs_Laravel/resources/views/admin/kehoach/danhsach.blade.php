@extends('admin.layouts.master')

@section('title')
	Danh sách đăng kí
@endsection

@section('content')

<table class="datatable mdl-data-table dataTable" cellspacing="0"
    width="100%" role="grid" style="width: 100%;">
    <thead>
        <tr>
            <th class="test">STT</th>
            <th class="test">Tên kế hoạch</th>
            <th class="test">Nội dung </th>
            <th class="test">Giảng_viên id</th>
            <th class="test">Ghi chú</th>

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
	            ajax: '{{ route('danhsach_kh') }}',
	            columns: [
                        { data: 'id'},
                        { data: 'ten_ke_hoach'},
                        { data: 'noi_dung'},
                        { data: 'giang_vien_id'},
                        { data: 'ghi_chu'}
                     ]
	        });
	    });
	</script>
@endsection
