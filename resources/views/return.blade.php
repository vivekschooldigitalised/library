 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
@section('content')

<script src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js') }}"></script>
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.components.css') }}">
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.plugins.min.css') }}">

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
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Book Return</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">

                </div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter">             </label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Admission Number</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">isbn</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Due Date</th>
                    <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Publisher</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Language</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Edition</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Num Of Pages</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Price</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Category</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Shelf</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Total Books</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th> -->

                  </tr>
                  </thead>
                  <tbody>

                  <form method="post" action="{{ route('book1.view') }}">
                @csrf

                @foreach($newbook1 as $newbook1)

                  <tr class="odd">
                    <td>{{ $newbook1->admissionnumberid }}</td>
                    <td>{{ $newbook1->isbn }}</td>
                    <td>{{ $newbook1->duedate }}</td>
                    <!-- <td>{{ $newbook1->publisher }}</td>
                    <td>{{ $newbook1->language }}</td>
                    <td>{{ $newbook1->edition }}</td>
                    <td>{{ $newbook1->numofpages }}</td>
                    <td>{{ $newbook1->price }}</td>
                    <td>{{ $newbook1->category }}</td>
                    <td>{{ $newbook1->shelf }}</td>
                    <td>{{ $newbook1->totalbooks }}</td> -->

                    <td><button type="button" class="btn btn-block btn-success">Return </button></td>
                    </tr>
          
                  @endforeach
</form>
                
                </tbody>
                  
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"></div></div></div></div>
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

