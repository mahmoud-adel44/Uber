@extends('admin.inc.header')
@section('place')
Home
@endsection
@section('content')





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Travels</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a >Travels</a></li>
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
                                            <th scope="col">driver_id </th>
                                            <th scope="col">passenger Name</th>
                                            <th scope="col">from</th>
                                            <th scope="col">to  </th>
                                            <th scope="col">cost</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @foreach ($travels as $travel)
                                        <tr class="text-center">
                                            <th class="bg-warning" scope="row">{{$loop->iteration}}</th>

                                            <td class="bg-warning mt-3">{{$travel->driver_id}}</td>
                                            <td class="bg-warning mt-3">{{$travel->passenger}}</td>
                                            @foreach ($town as $tow)
                                                @if ($tow->id == $travel->from)
                                                <td class="bg-warning mt-3">{{$tow->name}}</td>
                                                @endif
                                                @if ($tow->id == $travel->to)
                                                <td class="bg-warning mt-3">{{$tow->name}}</td>
                                                @endif

                                            @endforeach



                                            <td class="bg-warning">$  {{$travel->cost}}</td>
                                            <td class="bg-warning">{{$travel->status}}</td>

                                            <td class="bg-warning">

                                                <a href="{{route('admins.travel.show' , $travel->id)}}" class="btn btn-sm btn-info">Show More Details</a>
                                                <a href="{{route('admins.travel.delete' , $travel->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>

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
