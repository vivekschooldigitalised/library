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
                             <h3 class="card-title">Issue The Book</h3>
                         </div>

                         <div class="card-body">
                             <form method="get" action="{{route('assignbook.view')}}">
                             <center>
                                         <label for="cars">Issue To User</label>
                                       
                                             <select name="users" id="user">
                                                 <option value="volvo">Teacher/Admin</option>
                                                 <option value="saab">Student</option>
                                         </center>
                                         </select>
                                 <div class="row">
                                     <div class="col-md-6">
                                   
                                         <label class="control-label ">Enter The Admission Number</label>
                                         <div class="input-group input-group-sm mb-3">
                                             <input type="text" class="form-control" name="admission" value="{{ @$isbnno }}">
                                             <span class="input-group-append">
                                         </div>

                                     </div>

                                     <div class="col-md-6">

                                         <label class="control-label ">Enter The ISBN Number</label>
                                         <div class="input-group input-group-sm mb-3">
                                             <input type="text" class="form-control" name="isbn" value="{{ @$isbnno1 }}" required>
                                             <span class="input-group-append">
                                         </div>

                                     </div>
                                 </div>

                                 <center><input type="submit" class="btn btn-rounded btn-info" value="Search">

                             </form>
                         </div>

                         <center>

                         @foreach($res as $res)
                             <h6>Student Class -{{ $res->language }} </h6>
                             <h6>Student Section -{{ $res->title_long }} </h6>
                             <h6>Student Section -{{ $res->pages }} </h6>
                             <h6>Student Section -{{ $res->date_published }} </h6>
                             <h6>Student Section -{{ $res->isbn13 }} </h6>
                             @endforeach
                        


                             <br><br><br>


                             @foreach($allStudent as $value)
                             <h6>Student Admission Number -{{ $value->admissionnumber }} </h6>
                             <h6>Student Name -{{ $value->name }} </h6>
                             <h6>Student Class -{{ $value->class }} </h6>
                             <h6>Student Section -{{ $value->section }} </h6>
                             @endforeach

                             <br><br><br>

                             @foreach($allData as $value1)
                             <h6>Book ISBN -{{ $value1->isbn }} </h6>
                             <h6>Book Name -{{ $value1->name }} </h6>
                             <h6>Book Category -{{ $value1->category }} </h6>
                             <h6>Book Shelf -{{ $value1->shelf }} </h6>
                             @endforeach
                         </center>

                         <div class="card-body">
                             <form method="post" action="{{route('assignbook.store')}}">
                                 @csrf

                                 <div class="input-group input-group-sm mb-3">

                                     @foreach($allStudent as $value)

                                     <input type="hidden" class="form-control" name="admissionnumberid"
                                         value="{{ $value->admissionnumber }}"><br>
                                     @endforeach

                                     @foreach($allData as $value1)
                                     <input type="hidden" class="form-control" name="isbn"
                                         value="{{ $value1->isbn }}"><br>
                                     <input type="hidden" class="form-control" name="isbn" value="{{ $value1->isbn }}">

                                     @endforeach
                                     <span class="input-group-append">
                                 </div>

                                 <!-- <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center> -->
                                 
                                 <center><label class="control-label ">Due Date</label>
                                         <input type="date" id="duedate" name="duedate">
                                         <span class="input-group-append">
                                     
                                         </center>

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