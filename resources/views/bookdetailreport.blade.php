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

                             <form method="get" action="{{ route('book11.view') }}">
                                 @csrf
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                                 rowspan="1" colspan="1" aria-sort="ascending"
                                                 aria-label="Rendering engine: activate to sort column descending">ISBN
                                                 No</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="Browser: activate to sort column ascending">
                                                 Book Name</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1"
                                                 aria-label="Platform(s): activate to sort column ascending">Author Name
                                             </th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1"
                                                 aria-label="Engine version: activate to sort column ascending">
                                                 Publisher</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Language</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Edition</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Num Of Pages</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Price</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Category</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Shelf</th>
                                             <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Status</th>

                                         </tr>
                                     </thead>


                                     @foreach($data11 as $data11)

                                     <tr class="odd">
                                         <td>{{ $data11->isbn }}</td>
                                         <td>{{ $data11->name }}</td>
                                         <td>{{ $data11->authors }}</td>
                                         <td>{{ $data11->publisher }}</td>
                                         <td>{{ $data11->language }}</td>
                                         <td>{{ $data11->edition }}</td>
                                         <td>{{ $data11->pages }}</td>
                                         <td>{{ $data11->prices }}</td>
                                         <td>{{ $data11->category }}</td>
                                         <td>{{ $data11->shelf }}</td>

                                         <td>Damage/Available</td>

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