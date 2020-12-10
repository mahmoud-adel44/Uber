@extends('admin.inc.header')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ALL Towns --------------- <span class="pt-3">></span>  <a href="{{route('towns.create')}}" class="btn btn-warning">Add New State</a></h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Towns</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    {{-- ----------------------------------------------------------------------------------------- --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content p-0">
                                {{-- ---------------------------------------------------------------------------content-------------------------------------------------- --}}
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">State Name</th>
                                            <th scope="col">maridians</th>
                                            <th scope="col">latitudes</th>

                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($towns as $town)
                                        <tr class="text-center">
                                            <th class="bg-warning" scope="row">{{$loop->iteration}}</th>

                                            <td class="bg-warning mt-3">{{$town->name}}</td>
                                            <td class="bg-warning mt-3">{{$town->maridians}}</td>

                                            <td class="bg-warning">{{$town->latitudes}}</td>
                                            <td class="bg-warning">
                                                <a href="{{route('admins.town.edit' , $town->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{route('admins.town.delete' , $town->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                                {{-- ---------------------------------------------------------------------------end content------------------------------------------------------------- --}}
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
</div>
<!-- ./wrapper -->





@endsection














@extends('admin.inc.footer')
