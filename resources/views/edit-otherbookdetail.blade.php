
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
    @if (\Session::has('message'))
    <div class="alert alert-success">
        <ul>
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
@endif

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6" >
            
            <div class="card">
              <div class="card-header">



              


                <h3 class="card-title">Edit Other Book Details</h3>
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
     <center> <form action="{{route('editotherbookdetail.update')}}" method="post">
@csrf


                                    <p>Category: <select name="category" >
                                         @foreach($categoriesw as $caat)
                                         <option value="{{ $caat->name }}">{{ $caat->name }}</option>

                                         @endforeach
                                     </select></p>

                                     <p>Shelf: <select name="shelf" >
                                         @foreach($newshelfw as $caaat)
                                         <option value="{{ $caaat->name }}">{{ $caaat->name }}</option>

                                         @endforeach
                                     </select></p>

                                     @foreach($get_Data as $get_Data)
                                     <input type="hidden" value="{{$get_Data->id}}" name="id" >

                                     <label class="control-label ">School Book Id</label>
                                 <div class="input-group input-group-sm">
                                     <input type="text" value="{{$get_Data->schoolbookid}}" class="form-control" name="schoolbookid">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Book Series</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text"  value="{{$get_Data->bookseries}}" name="bookseries"class="form-control">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Volume </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$get_Data->volume}}" name="volume"class="form-control">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Purchase Date </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="date" value="{{$get_Data->purchasedate}}" class="form-control" name="purchasedate">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Bill Number </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$get_Data->billnumber}}" class="form-control" name="billnumber">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Currency </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$get_Data->currency}}" class="form-control" name="currency">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Current Price </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" value="{{$get_Data->currentprice}}" class="form-control" name="currentprice">
                                     <span class="input-group-append">
                                 </div>


                                 <label class="control-label ">Book Issue Permission </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select class="form-control" name="issuepermission" > 
                                         <option value="YES">YES</option>
                                         <option value="NO">NO</option>
                                     </select>
                                 </div>


                           
                                 <label class="control-label ">Remarks For The Book </label>
                                 <div class="input-group input-group-sm mb-3">
                                  <select class="form-control" name="bookremarks" >
                                         @foreach($newbookremarks1 as $newbookremarks2)
                                         <option value="{{ $newbookremarks2->name }}">{{ $newbookremarks2->name }}</option>

                                         @endforeach
                                     </select>
                                     </div>

                               

                                 


                                     

    

    
    

    
    <p><button type="submit" class="btn btn-info">Update</button></p>

    @endforeach






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

