@extends('admin.inc.header')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Town  {{$town->name}}</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Towns / Edit / {{$town->name}}</a></li>
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
                                <form action="{{route('admins.town.update')}}"  method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$town->id}}">


                                    <div class="form-group">
                                        <label >state Name</label>
                                        <input type="text" class="form-control" name="name"
                                        value="{{$town->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label >Enter maridians</label>
                                        <input type="number" class="form-control" name="maridians"value="{{$town->maridians}}">
                                    </div>

                                    <div class="form-group">
                                        <label >Enter latitudes</label>
                                        <input type="number" class="form-control" name="latitudes" value="{{$town->latitudes}}">
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
