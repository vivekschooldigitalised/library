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
                             <h3 class="card-title">Select The Shelf</h3>
                         </div>
                         <div class="card-body">
                             <form method="post" action="{{ route('self.store') }}">
                                 @csrf



                                 <label class="control-label mx-2">Select The Book </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select name="book" id="class_id" required="" class="form-control">
                                         @foreach($book as $book)
                                         <option value="{{ $book->id }}">{{ $book->name }}</option>
                                         @endforeach
                                     </select>
                                     <span class="input-group-append">
                                 </div>


                                 <input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Tag"> </span>
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