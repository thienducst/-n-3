@extends('admin.layouts.master')

@section('title')
	Danh sách giảng viên
@endsection

@section('content')

<table class="datatable mdl-data-table dataTable" cellspacing="0"
    width="100%" role="grid" style="width: 100%;">
    <thead>
        <tr>
            <th class="test">ID</th>
            <th class="test">Name</th>
            <th class="test">Email</th>
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
	            ajax: '{{ route('danhsach_gv') }}',
	            columns: [
                        { data: 'id'},
                        { data: 'ho_ten'},
                        { data: 'email'}
                     ]
	        });
	    });
	</script>
@endsection
