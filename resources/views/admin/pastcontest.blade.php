@extends('admin.layout')

@section('content')
    <div class="container-fluid dashboard-content ">
    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Contests</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="/sadmin/dashboard" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="/sadmin/dashboard/contest/past" class="breadcrumb-link">Contest</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

    <div class="row">
    @if(session()->has('success'))
                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                </div>
                                            @endif
                                            @if(session()->has('error'))
                                                <div class="alert alert-danger">
                                                    {{ session()->get('error') }}
                                                </div>
                                            @endif
                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                            <h5 class="card-header">Contests</h5>
                                <ul class="navbar-nav ml-auto navbar-right-top">
                                    <li class="nav-item">
                                        <div id="custom-search" class="top-search-bar">
                                            <input class="form-control" type="text" placeholder="Search..">
                                        </div>
                                    </li>
                                </ul>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Contest Name</th>
                                                    <th>Start At</th>
                                                    <th>End At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contests as $key=>$contest)
                                                <tr>
                                                    <td>{{$contest->ContestID}}</td>
                                                    <td>{{$contest->ContestName}}</td>
                                                    <td>{{$contest->ContestBegin}}</td>
                                                    <td>{{$contest->ContestEnd}}</td>
                                                    <td>                                                        
                                                        <a title="Detail" href="/sadmin/dashboard/contest/{{$contest->ContestID}}/detail"><i style="color: green" class="m-r-10 mdi mdi-book"></i></a>
                                                        <a title="Delete" onclick="return confirm('Do you really want to delete the contest?');" href="/sadmin/dashboard/contest/{{$contest->ContestID}}/delete"><i style="color:red" class="m-r-10 mdi mdi-delete-forever"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Contest Name</th>
                                                    <th>Start At</th>
                                                    <th>End At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table  -->
                        <!-- ============================================================== -->
                    </div>
</div>        
@endsection