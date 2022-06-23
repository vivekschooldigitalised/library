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


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">


                        
              @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
                @endif

                
                            <h3 class="card-title">Edit Shelf Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">


                               <form action="{{route('shelf.update')}}" method="POST">
                               @csrf
                               <input type="hidden" name="id" value= "{{ $shelf->id }}">

                               <label class="control-label ">Shelf</label>
                                 <input type="text" name="name" value= "{{ $shelf->name }}" placeholder="Enter Shelf">
                                <button type="submit" class="btn btn-info">Edit</button>


                               </form>
                            </div>
                        </div>
                       
                    </div>
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