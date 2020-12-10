@extends('admin.inc.header')
@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ALL Drivers --------------->  <a href="{{route('drivers.create')}}" class="btn btn-warning">Add New driver</a></h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Drives</a></li>
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
            <!-- Small boxes (Stat box) -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content p-0">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th scope="col">#</th>
                                            <th scope="col">name</th>
                                            <th scope="col">number</th>
                                            <th scope="col">car</th>
                                            <th scope="col">is_busy</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($drives as $driver)
                                        <tr class="text-center">
                                            <th class="bg-warning" scope="row">{{$loop->iteration}}</th>

                                            <td class="bg-warning mt-3">{{$driver->name}}</td>
                                            <td class="bg-warning mt-3">{{$driver->car}}</td>

                                            <td class="bg-warning">{{$driver->number}}</td>
                                            @if ($driver->is_busy == 0)
                                            <td class="bg-warning">Not Busy</td>
                                            @else
                                            <td class="bg-warning">Busy</td>
                                            @endif
                                            <td class="bg-warning">
                                                <a href="{{route('admins.driver.edit' , $driver->id)}}" class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{route('admins.driver.delete' , $driver->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>
                            <div class="d-flex justify-content-center w-100 mb-5">
                                {!! $drives->render() !!}

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


<!-- Control Sidebar -->

<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->





@endsection



@extends('admin.inc.footer')
