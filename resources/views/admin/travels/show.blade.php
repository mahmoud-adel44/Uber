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
                        <li class="breadcrumb-item"><a>Travels</a></li>
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
                                {{-- ------------------content-------------------------------- --}}

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationDefault01">Driver name</label>
                                            <input type="text" class="form-control" disabled value="{{$driver[0]->name}}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label>Type Of Car</label>
                                            <input type="text" class="form-control"
                                                value="{{$driver[0]->car}}"    disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label >Driver Number</label>
                                            <input type="text" class="form-control" value="{{$driver[0]->number}}" disabled>
                                        </div>
                                        @foreach ($town as $tow)
                                        @if ($tow->id == $travel[0]->from)
                                        <div class="col-md-3 mb-3">
                                            <label >From</label>
                                            <input type="text" class="form-control" disabled value="{{$tow->name}}">
                                        </div>

                                        @endif
                                        @if ($tow->id == $travel[0]->to)
                                        <div class="col-md-3 mb-3">
                                            <label>To</label>
                                            <input type="text" class="form-control" disabled value="{{$tow->name}}">
                                        </div>
                                        
                                        @endif



                                        @endforeach
                                        {{-- <div class="col-md-3 mb-3">
                                            <label >From</label>
                                            <input type="text" class="form-control" disabled value="{{$travel[0]->from}}">
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label>To</label>
                                            <input type="text" class="form-control" disabled value="{{$travel[0]->to}}">
                                        </div> --}}
                                    </div>



                                {{-- ------------------endcontent-------------------------------- --}}
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
