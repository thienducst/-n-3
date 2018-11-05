@extends('admin.layouts.master')

@section('title')
	Danh sách đề tài
@endsection

@section('content')

<table class="datatable mdl-data-table dataTable" cellspacing="0"
    width="100%" role="grid" style="width: 100%;">
    <thead>
        <tr>
            <th class="test">STT</th>
            <th class="test">Tên đề tài</th>
            <th class="test">Giảng viên id</th>
            <th class="test">Ngành id</th>
            <th class="test">Nội dung</th>
            <th class="test">Phạm vi</th>
            <th class="test">Số lượng</th>
            <th class="test">Trạng thái</th>
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
	            ajax: '{{ route('danhsach_detai') }}',
	            columns: [
                        { data: 'id'},
                        { data: 'ten_de_tai'},
                        { data: 'giang_vien_id'},
                        { data: 'nganh_id'},
                        { data: 'noi_dung'},
                        { data: 'pham_vi'},
                        { data: 'so_luong'},
                        { data: 'trang_thai'}
                     ]
	        });
	    });
	</script>
@endsection
