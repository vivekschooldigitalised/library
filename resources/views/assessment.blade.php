 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
                 <div class="col-md-12">

                     <!-- Input addon -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Issue The Book</h3>
                         </div>

                         <div class="card-body">
                             <form method="get" action="{{route('AssessmentStore.store')}}">
                            
                                 <div class="row">
                                     <div class="col-md-6">
                                   
                                         <!-- <label class="control-label ">Enter The Admission Number</label>
                                         <div class="input-group input-group-sm mb-5">
                                             <input type="text" class="form-control" name="admission" value="{{ @$isbnno }}">
                                             <span class="input-group-append">
                                         </div> -->

                                     </div>

                                     <div class="col-md-12">

                                         <label class="control-label ">Enter The ISBN Number</label>
                                         <div class="input-group input-group-sm mb-1">
                                             <input type="text" class="form-control" name="isbn" value="{{ @$isbnno1 }}" required>
                                             <span class="input-group-append">
                                         </div>

                                     </div>
                                 </div>

                                 <center><input type="submit" class="btn btn-rounded btn-info" value="Search">

                             </form>
                         </div>

                         <center>

                     


                             <br><br><br>


                             <table class="table">
  <thead>
    <tr>
      <!-- <th scope="col">Student Admission Number</th> -->
      <th scope="col">ISBN Number</th>
      <th scope="col">Title Name</th>
      <th scope="col">Author</th>
      <th scope="col">Publisherr</th>
      <th scope="col">Add Accessment Number</th>
      
    </tr>
  </thead>
  <tr>
      <td>vivek</td>
      <td>john</td>
      <td>vivek</td>
      <td>john</td>
      <td><input type="text" name="assessment" id="assessment"></td>
      <th scope="col"><a href="javascript:;" class="btn btn-info addrow">+</a></th>
    
  <tbody>
    
                            
  </tbody>
</table>


                        

                         

                                 <!-- <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center> -->
                                 
                                 <!-- <center><label class="control-label ">Due Date</label>
                                         <input type="date" id="duedate" name="duedate">
                                         <span class="input-group-append">
                                     
                                         </center> -->

                                         <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Submit"></center>

                                     
                                 



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