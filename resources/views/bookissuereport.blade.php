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
                             <form method="get" action="{{route('assignbook11.view')}}">
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
                                 
                                     @foreach($data11 as $value11)
                                     <tr>
                                     <td>{{$value11->admissionnumber }}</td>                     
                                     <td>{{ $value11->isbn }}</td> 
                                     <td>{{ $value11->name }}</td> 
                                     <td>{{ $value11->schoolbookid }}</td>  
</tr>                                             
                                     @endforeach
    
                                     <tbody>
                                     
                                 </tbody>
                                
                             </table>
                             </form>
                         </div>

                         <!-- /input-group -->
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->


             </div>
             <!--/.col (right) -->

             <div class="col-md-12">




 @endsection