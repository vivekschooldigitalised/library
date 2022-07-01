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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Total Available Books are - </h5>

                <!-- <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p> -->

                <a href="#" class="card-link">230</a>
                <!-- <a href="#" class="card-link">540</a> -->
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Total Issued Books are - </h5>
<!-- 
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p> -->
                <a href="#" class="card-link">123</a>
                <!-- <a href="#" class="card-link">Another link</a> -->
              </div>
              
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card">

            <div class="card-header">
           

                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <a href="{{ route('book11.view') }}" class="btn btn-primary">Click here to search the book</a>
              </div>
            </div>
            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <a href="{{route('assignbook.view')}}" class="btn btn-primary">Click here to issue the book</a>
              </div>
            </div>

            <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
               
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                <!-- <a href="#" class="btn btn-primary">Click here to submit the book</a> -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  @endsection

