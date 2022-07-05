 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <div class="card" style=" margin-left: 257px; ">
     <div class="card-header">
         <h3 class="card-title">DataTable with default features</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>Sr.Num</th>
                    <th>ISBN No</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Publisher</th>
                    <th>Language</th>
                    <th>Edition</th>
                    <th>Num Of Pages</th>
                    <th>Price</th>
                   
                    <th>Action</th>
                 </tr>
             </thead>
             <tbody>
@foreach($allData101 as $key=> $allData101)
                  <tr class="odd">
                    <td>{{ $key+1 }}</td>
                    <td>{{ $allData101->isbn }}</td>
                    <td>{{ $allData101->name }}</td>
                    <td>{{ $allData101->authors }}</td>
                    <td>{{ $allData101->publisher }}</td>
                    <td>{{ $allData101->language }}</td>
                    <td>{{ $allData101->edition }}</td>
                    <td>{{ $allData101->pages }}</td>
                    <td>{{ $allData101->prices }}</td>
                 
                  <td><a href="{{ route('allbook.edit',  $allData101->id) }}" class="btn btn-info">Edit</a></td>
              
                  </tr>
          
                  @endforeach

                 
             </tbody>
             
         </table>
     </div>
     <!-- /.card-body -->
 </div>

 <!-- /.content-wrapper -->
 @endsection

