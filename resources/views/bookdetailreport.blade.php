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
                                         <th >Sr.No</th>
                                             <th >ISBN No</th>
                                             <th >Book Name</th>
                                             <th >Author</th>
                                             <th >Publisher</th>
                                             <th >Language</th>
                                             <th >Edition</th>
                                             <th >Pages</th>
                                             <th >Price</th>
                                             <th >Category</th>
                                             <th >Shelf</th>
          <th >Book Remarks</th>
          <th >Status</th>
</tr>
                                     </thead>
             <tbody>
@foreach($data11 as $key=>$data11)

                                     <tr class="odd">
                                         <td>{{ $key+1 }}</td>
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
                                         
                                         <td>{{ $data11->bookremarks }}</td>
                                         <td>{{ $data11->issuepermission }}</td>

                                     </tr>
                         
                                     @endforeach

                 
             </tbody>
             
         </table>
     </div>
     <!-- /.card-body -->
 </div>

 <!-- /.content-wrapper -->
 @endsection

