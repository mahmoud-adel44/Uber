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
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                      <!-- small box -->
                                      <div class="small-box bg-info">
                                        <div class="inner">

                                          <h3>{{$countOfDrivers}}</h3>
                                          <p>Number Of Drivers</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-person-add"></i>
                                        </div>
                                        <a href="{{ route('drivers.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                      </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                      <!-- small box -->
                                      <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>{{$countOfTravels}}</h3>

                                          <p>Number Of Travels</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-stats-bars"></i>
                                        </div>
                                        <a href="{{ route('towns.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                      </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                      <!-- small box -->
                                      <div class="small-box bg-warning">
                                        <div class="inner">
                                          <h3>{{$countOfTowns}}</h3>

                                          <p>Number Of Towns</p>
                                        </div>
                                        <div class="icon">

                                          <i class="ion ion-home"></i>
                                        </div>
                                        <a href="{{ route('towns.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                      </div>
                                    </div>

                                  </div>
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
