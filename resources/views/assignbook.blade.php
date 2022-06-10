 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css" integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                         <div class="input-group input-group-sm mb-5">
                                             <input type="text" class="form-control" name="admission" value="{{ @$isbnno }}">
                                             <span class="input-group-append">
                                         </div>

                                     </div>

                                     <div class="col-md-6">

                                         <label class="control-label ">Enter The ISBN Number</label>
                                         <div class="input-group input-group-sm mb-3">
                                             <input type="text" class="form-control" name="isbn" value="{{ @$isbnno1 }}"
                                                 required>
                                             <span class="input-group-append">
                                         </div>

                                     </div>
                                 </div>
                             
                                 <center><input type="submit" class="btn btn-rounded btn-info" value="Search">

                             </form>
                         </div>

                         <center>

                      

                        

                             <br><br><br>

                             <form method="POST" action="{{route('assignbook1.store')}}">
                                 @csrf
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <!-- <th scope="col">Student Admission Number</th> -->

                                         <th scope="col">User ID</th>
                                         <th scope="col">ISBN Number</th>
                                         <th scope="col">Title Name</th>
                                         <th scope="col">School Book Id</th>
                                         <th scope="col">Due Date</th>
                                        

                                         
                                                                        
                                     </tr>
                                 </thead>
                                 @foreach($allStudent as $value)
                                 <td>{{ $value->admissionnumber }}</td>
                                 @endforeach
                                 @foreach($data1 as $value1)
                                 <td>{{ $value1->isbn }}</td>
                                 <td>{{ $value1->name }}</td>
                                 <td>{{ $value1->schoolbookid }} </td>
                            
                                   
                             
                                     <td><input type="date" name="duedate" required> </td>
                                     
                                     @foreach($allStudent as $value)
                                     <td><input type="hidden" name="admissionnumber1" value=" {{$value->id }} "></td>
                                     @endforeach

                                     @foreach($data1 as $value1)
                                     <td><input type="hidden" name="isbn1" value="{{ $value1->isbn_id }}"></td> 
                                     <td><input type="hidden" name="name1" value="{{ $value1->name }}"></td> 
                                     <td><input type="hidden" name="schoolbookid1" value="{{ $value1->id }}"></td>                                                   
                                     @endforeach


                                    
                                     
                                   
                                     <td><button type="submit" class="btn btn-warning">Issue</button></td>                             
                                     
                                     <tbody>
                                       
                                         
                                         
                       
                                 </tbody>
                                 @endforeach
                             </table>
                             </form>
<br><br><br><br>


<h4> Issued Book Report</h4>



                             <form method="POST" action="{{route('assignbook.store')}}">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <!-- <th scope="col">Student Admission Number</th> -->

                                         <th scope="col">User</th>
                                         <th scope="col">ISBN Number</th>
                                         <th scope="col">Title Name</th>
                                         <th scope="col">School Book Id</th>
                                         <th scope="col">Due Date</th>
                                         <th scope="col">Action</th> 

                                         
                                                                        
                                     </tr>
                                 </thead>

                                 @foreach($data5 as $data5)
                                 @if($data5->isbn == true)
                                     <td>{{ $data5->admissionnumber }}</td>
                                     <td>{{ $data5->isbn }}</td>
                                     <td>{{ $data5->name }} </td>
                                     <td>{{ $data5->schoolbookid }} </td>
                                     <td>{{ $data5->duedate }} </td>
                                                                
                                     <td><a href="{{ route('assignbook.edit',$data5->idd) }}" class="btn btn-info">Edit</a></td>
                                     
                                     <tbody>
                                         @endif
                                         @endforeach
<!--                                          
                                 @foreach($allStudent as $value)
                                 <td>{{ $value->admissionnumber }}</td>
                                 @endforeach
                                 @foreach($data1 as $value1)
                                 <td>{{ $value1->isbn }}</td>
                                 <td>{{ $value1->name }}</td>
                                 <td>{{ $value1->schoolbookid }} </td>
                                     @endforeach

                                     @foreach($allData11 as $value11)
                                     <td><input type="text" name="duedate" value="{{ $value11->duedate }}"></td>
                                     @endforeach

                                     <td><input type="date" name="returndate" required></td>     -->   
                                 
                                    
                                      
                                     <tbody>
                     
                             </table>
                             </form>
                             <br><br><br>




                             
                             <!-- 
                             @foreach($allData as $value1)
                             <h6>Book ISBN -{{ $value1->isbn }} </h6>
                             <h6>Book Name -{{ $value1->name }} </h6>
                             <h6>Book Category -{{ $value1->category }} </h6>
                             <h6>Book Shelf -{{ $value1->shelf }} </h6>
                             @endforeach -->
                         </center>


<!-- 
                        <div class="card-body">
                             <form method="post" action="{{route('assignbook.store')}}">
                                 @csrf

                                 <div class="input-group input-group-sm mb-3">

                                     @foreach($allData as $value)

                                     <input type="text" class="form-control" name="admissionnumberid"
                                         value="{{ $value->admissionnumber }}"><br>
                                     @endforeach

                                     @foreach($allData as $value1)
                                     <input type="text" class="form-control" name="isbn"
                                         value="{{ $value1->isbn }}"><br>
                                     <input type="hidden" class="form-control" name="isbn" value="{{ $value1->isbn }}">

                                     @endforeach
                                     <span class="input-group-append">
                                 </div> 

                         <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Search"></center>

                         <center><label class="control-label ">Due Date</label>
                             <input type="date" id="duedate" name="duedate">
                             <span class="input-group-append">

                         </center>

                         <center><input type="submit" class="btn btn-rounded btn-info mb-5 mt-2" value="Submit">
                         </center> -->






                         </form>
                         <!-- /input-group -->
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->


             </div>
             <!--/.col (right) -->

             <div class="col-md-12">




 @endsection