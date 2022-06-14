 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Trinity Global School</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Category Detail</h3>
              </div>
              <div class="card-body">
                <form method="post" action="{{ route('category.store') }}">
                @csrf
                <p>Enter The Name Of Category</p>
                <div class="input-group input-group-sm">
                  
                  <input type="text" class="form-control" name="category" >

                  <span class="input-group-append">

                  <input type="submit" class="btn btn-rounded btn-info mb-5" value="Send">                  </span>
                </div>
</form>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  @endsection

