 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container-fluid">
             <div class="row mb-2">
                 <div class="col-sm-6">
                     <center>
                         <h1 class="m-0">Trinity Global School</h1>
                     </center>
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
                 <div class="col-md-2">
                 </div>
                 <div class="col-md-8">

                     <!-- Input addon -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Add Other Details of Book</h3>
                         </div>

                         <div class="card-body">
                             <form method="get" action="{{route('bookotherdetail.view')}}">

                                 <div class="input-group input-group-sm mb-3">
                                     <label class="control-label ">Enter The ISBN Number</label>
                                     <input type="text" class="form-control" name="isbn" value="{{ @$isbnno }}"
                                         required>
                                     <span class="input-group-append">
                                 </div>

                                 <center><input type="submit" class="btn btn-rounded btn-info mb-2 mt-1"
                                         value="Add Other Detail">

                                 </center>
                             </form>
                         </div>


                         <div class="card-body">
                             <form method="post" action="{{route('bookotherdetail.store')}}">
                                 @csrf

                                 @foreach($allData as $value)

                                 <center>
                                     <h3><u>Title Name of Book is - </u><br> {{ $value->name }}</h3>
                                 </center>
                                 <div class="input-group input-group-sm mb-3">

                                       
                                     <input type="hidden" class="form-control" name="isbn" value="{{ $value->isbn }}">
                                   
                                     <span class="input-group-append">
                                 </div>
                                 <label class="control-label ">Category</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select name="category" >
                                         @foreach($categories as $categories)
                                         <option value="{{ $categories->name }}">{{ $categories->name }}</option>

                                         @endforeach
                                     </select>
                                     <span class="input-group-append">
                                 </div>
                                 <label class="control-label ">Shelf</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select name="shelf">
                                         @foreach($newshelf as $shelf)
                                         <option value="{{ $shelf->name }}">{{ $shelf->name }}</option>

                                         @endforeach
                                     </select>
                                     <span class="input-group-append">
                                 </div>

                                 <!-- <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center> -->
                                 <label class="control-label ">School Book Id</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="schoolbookid">
                                     <span class="input-group-append">
                                 </div>
                                 <label class="control-label ">Book Series</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="bookseries">
                                     <span class="input-group-append">
                                 </div>

                             
                                 <div class="input-group input-group-sm mb-3">
                                 <input type="hidden" class="form-control" name="status" value="1">
                                 <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Volume </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="volume">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Purchase Date </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="date" class="form-control" name="purchasedate">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Bill Number </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="billnumber">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Currency </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="currency">
                                     <span class="input-group-append">
                                 </div>

                                 <label class="control-label ">Current Price </label>
                                 <div class="input-group input-group-sm mb-3">
                                     <input type="text" class="form-control" name="currentprice">
                                     <span class="input-group-append">
                                 </div>



                                 <label class="control-label ">Book Permission</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select name="issuepermission" class="form-control">
                                        
                                         <option value="YES">YES</option>
                                         <option value="NO">NO</option>
                                         
                                         
                                     </select>
                                     <span class="input-group-append">
                                        </div>


                                 <label class="control-label ">Book Remarks</label>
                                 <div class="input-group input-group-sm mb-3">
                                     <select name="bookremarks" class="form-control">
                                         @foreach($newbookremarks as $newbookremarks)
                                         <option value="{{ $newbookremarks->name }}">{{ $newbookremarks->name }}</option>

                                         @endforeach
                                     </select>
                                     <span class="input-group-append"> 
                                 </div>

                       



                                 <input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Send">


                                 @endforeach
                      

                             </form>
                             </div>
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