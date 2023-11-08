@extends('layouts.master')
@section('content')
{{-- message --}}
{!! Toastr::message() !!}
<div class="page-wrapper">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Departments</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Departments</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="student-group-form">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by ID ...">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Name ...">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search by Year ...">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="search-student-btn">
                        <button type="btn" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">

                        <div class="page-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="page-title">Departments</h3>
                                </div>
                                <div class="col-auto text-end float-end ms-auto download-grp">
                                    <a href="#" class="btn btn-outline-primary me-2"><i
                                            class="fas fa-download"></i> Download</a>
                                    <a href="add-department.html" class="btn btn-primary">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <table class="table table-stripped table table-hover table-center mb-0" id="dataList">
                            <thead class="student-thread">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>HOD</th>
                                    <th>Started Year</th>
                                    <th>No of Students</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('script')
    {{-- get data all js --}}
    <script type="text/javascript">
        $(document).ready(function() {
        $('#dataList').DataTable({
                processing: true,
                serverSide: true,
                ordering: true,
                searching: true,
                ajax: {
                    url:"{{ route('get-data-list') }}",
                },
                columns: [
                    {
                        data: 'department_id',
                        name: 'department_id',
                    },
                    {
                        data: 'department_name',
                        name: 'department_name',
                    },
                    {
                        data: 'head_of_department',
                        name: 'head_of_department',
                    },
                    {
                        data: 'department_start_date',
                        name: 'department_start_date',
                    },
                    {
                        data: 'no_of_students',
                        name: 'no_of_students',
                    },
                    {
                        data: 'modify',
                        name: 'modify',
                    },
                ]
            });
        });
    </script>
@endsection
@endsection
