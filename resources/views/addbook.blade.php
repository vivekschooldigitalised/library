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
                <h3 class="card-title">Add New Book Detail</h3>
              </div>
              <div class="card-body">
                <form method="post" action="{{ route('newbook.store') }}">
                @csrf
                <label class="control-label ">Enter The ISBN/Assession Number of Book </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="isbn" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Enter The Title of Book </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="title" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Author Name </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="author" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Publisher Name </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="publisher" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Language </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="language" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Edition </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="edition" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Number Of Pages </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="numofpages" >
                  <span class="input-group-append">
                </div>

                <label class="control-label ">Price </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="price" >
                  <span class="input-group-append">
                </div>
                

                <label class="control-label mx-2">Category </label>
                  <div class="input-group input-group-sm mb-3">
                  <select name="category" id="class_id" required="" class="form-control">
													@foreach($categories as $category)
													<option value="{{ $category->id }}">{{ $category->name }}</option>
													@endforeach
												</select>
                    <span class="input-group-append">
                  </div>

              


                  <label class="control-label mx-2">Select Shelf </label>
                  <div class="input-group input-group-sm mb-3">
                  <!-- <p>Publisher</p> -->
                  <select name="newshelf" id="class_id" required="" class="form-control">
													@foreach($newshelf as $newshelf)
													<option value="{{ $newshelf->id }}">{{ $newshelf->name }}</option>
													@endforeach
												</select>
                    <span class="input-group-append">
                  </div>
                  <label class="control-label ">Total Number Of Books </label>
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="numofbooks" >
                  <span class="input-group-append">
                </div>
                    <input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Send">                  </span>
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

