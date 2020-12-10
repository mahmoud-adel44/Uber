@extends('admin.inc.header')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add New Driver</h1>

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
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">

                        <div class="card-body">
                            <div class="tab-content p-0">
                                {{-- ---------------------------------------------------------------------------content-------------------------------------------------- --}}
                                <form action="{{route('drivers.store')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Name</label>
                                        <input type="text" class="form-control" name="name"
                                            >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Type Of Car</label>
                                        <input type="text" class="form-control" name="car">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone Number</label>
                                        <input type="text" class="form-control" name="number">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>



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
