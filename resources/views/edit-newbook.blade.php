
 @extends('layouts.app')
@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h6 class="m-0">Trinity Global School</h6>
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


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6">
                    <div class="dt-buttons btn-group flex-wrap">
                        <!-- <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button>
                         <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span>
                        </button> -->
                        <!-- <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"> -->

                        </span>
                    </button>
                </div> 
            </div>
        </div>
      <form action="{{route('newbook.update')}}" method="post">
@csrf
      <input type="hidden" name="id" value= "{{ $newbook->id }}"> 

      <label class="control-label ">ISBN </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->isbn}}" name="isbn" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Name </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->name}}" name="name" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Author </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->authors}}" name="authors" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Publisher </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->publisher}}" name="publisher" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Language </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->language}}" name="language" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Edition </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->edition}}" name="edition" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Pages </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->pages}}" name="pages" class="form-control" >
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Price </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$newbook->prices}}" name="prices" class="form-control" >
                                     <span class="input-group-append">
                                 </div>


     <center> <p><button type="submit" class="btn btn-info">Update</button></p></center>






</form></center>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      </div>

  <!-- /.content-wrapper -->
  @endsection

