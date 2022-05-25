 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <center><h1 class="m-0">Trinity Global School</h1></center>
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
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      <div class="row">
          <!-- left column -->
          <div class="col-md-2">
</div>
          <div class="col-md-8">

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Add Other Details of Book</h3>
              </div>
              <div class="card-body">
                <form method="post" action="{{route('bookotherdetail.store')}}">
                @csrf
                <div class="input-group input-group-sm mb-3">
                    <label class="control-label ">Enter The ISBN Number</label>
                    <input type="text" class="form-control" name="isbn" >
                  <span class="input-group-append">
                </div>
                <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center>
                <div class="input-group input-group-sm mb-3">
                    <label class="control-label ">Title Name of Book is -  </label> 
        
                  <!-- <input type="text" class="form-control" name="title" > -->
                  <span class="input-group-append">
                </div>
                <!-- <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center> -->
                <label class="control-label ">Book Series </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="bookseries" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Volume </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="volume" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Purchase Date </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="purchasedate" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Bill Number </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="billnumber" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Currency </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="currency" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Current Price </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="currentprice" >
                  <span class="input-group-append">
                </div>
                

              
              

                    <input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Send">             
</form>
                <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (right) -->

          <div class="col-md-2">
</div>


        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  @endsection

