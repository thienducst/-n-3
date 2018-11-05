@extends('admin.layouts.master')
@section('titlePage')
	Ngành
@endsection
@section('title')
	Danh sách ngành
@endsection

@section('content')

<table class="datatable mdl-data-table dataTable" cellspacing="0"
    width="100%" role="grid" style="width: 100%;">
    <thead>
        <tr>
            <th class="test">STT</th>
            <th class="test">Tên ngành</th>
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
	            ajax: '{{ route('danhsach_nganh') }}',
	            columns: [
                        { data: 'id'},
                        { data: 'ten_nganh'}
                     ]
	        });
	    });
	</script>
@endsection

@section('button')
	<a  href="{{ route('nganh.them') }}" class="mb-xs mt-xs mr-xs btn btn-success">Thêm</a>
@endsection