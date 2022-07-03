 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"
     integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css"
     integrity="sha512-9tISBnhZjiw7MV4a1gbemtB9tmPcoJ7ahj8QWIc0daBCdvlKjEA48oLlo6zALYm3037tPYYulT0YQyJIJJoyMQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />


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
                                 @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
                @endif
                                 <div class="row">
                                     <div class="col-md-6">
                                         <label class="control-label ">Enter The Admission Number</label>
                                         <div class="input-group input-group-sm mb-5">
                                             <input type="text" class="form-control" name="admission"
                                                 value="{{ @$isbnno }}" required>
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

                             <table class="table">
                                 <thead>
                                         <tr>
                                             <!-- <th scope="col">Student Admission Number</th> -->
                                             <th scope="col">Sr. Num.</th>
                                             <th scope="col">User ID</th>
                                             <th scope="col">ISBN Number</th>
                                             <th scope="col">Title Name</th>
                                             <th scope="col">School Book Id</th>
                                             <th scope="col">Due Date</th>
                                             <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        
                                        @foreach($data1 as $key=> $value1)
                                        <tbody>
                                         <form method="POST" action="{{route('assignbook1.store',$value1->admissionnumber)}}">
                                          @csrf
                                          
                                             @foreach($allStudent as $value)
                                             <td>{{ $key+1 }}</td>
                                             <td>{{ $value->admissionnumber }}</td>
                                             <input type="hidden" name="admissionnumber1" value=" {{$ret33 = $value->id }} ">
                                             @if($ret33 == true)
                                             
                                             <td>{{ $value1->isbn }}</td>
                                             <td>{{ $value1->name }}</td>
                                             <td>{{ $value1->schoolbookid }} </td>
                                             <input type="hidden" name="isbn1" value="{{ $value1->isbn_id }}">
                                             <input type="hidden" name="name1" value="{{ $value1->name }}">
                                             <input type="hidden" name="schoolbookid1" value="{{ $value1->id }}">
                                             <td><input type="date" name="duedate" required></td>
                                             <td><button type="submit" class="btn btn-warning">Issue</button></td>
                                         </form>
                                     </tbody>
                                     @endif 
                                     @endforeach
                                     @endforeach

                                 </table>
                             <br><br><br><br>


                             <h4> Issued Book Report</h4>



                             <form method="POST" action="{{route('assignbook.store')}}">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <!-- <th scope="col">Student Admission Number</th> -->
                                             <th scope="col">Sr. Num.</th>
                                             <th scope="col">User</th>
                                             <th scope="col">ISBN Number</th>
                                             <th scope="col">Title Name</th>
                                             <th scope="col">School Book Id</th>
                                             <th scope="col">Due Date</th>
                                             <th scope="col">Return Status</th>
                                             <th scope="col">Action</th>



                                         </tr>
                                     </thead>

                                     @foreach($data5 as $key=> $data5)
                                     @if($data5->isbn == true)
                                     <td>{{ $key+1 }}</td>
                                     <td>{{ $data5->admissionnumber }}</td>
                                     <td>{{ $data5->isbn }}</td>
                                     <td>{{ $data5->name }} </td>
                                     <td>{{ $data5->schoolbookid }} </td>
                                     <td>{{ $data5->duedate }} </td>
                                     <td>{{ $data5->returndate }} </td>
                                     <td><a href="{{ route('assignbook.edit',$data5->idd) }}"
                                             class="btn btn-info">Return</a></td>
                                     <tbody>
                                         @endif
                                         @endforeach




                                     <tbody>

                                 </table>
                             </form>
                             <br><br><br>


                         </center>





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