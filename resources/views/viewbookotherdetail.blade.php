 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')


 <div class="card" style=" margin-left: 257px; ">
     <div class="card-header">
         <h3 class="card-title">Book Other Detail Report</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>S.No</th>
                     <th>ISBN No</th>
                     <th>Category Name</th>
                     <th>Shelf Name</th>
                     <th>School Book ID</th>
                     <th>Book Series</th>
                     <th>Volume</th>
                     <th>Purchase Date</th>
                     <th>Bill Number</th>
                     <th>Currency</th>
                     <th>Current Price</th>
                     <th>Book Issue Permission</th>
                     <th>Book Remarks</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 @foreach($allData222 as $key=> $allData222)
                 <tr class="odd">
                     <td>{{ $key+1 }}</td>
                     <td>{{ $allData222['isbn_no']['isbn'] }}</td>
                     <td>{{ $allData222->category }}</td>
                     <td>{{ $allData222->shelf }}</td>
                     <td>{{ $allData222->schoolbookid }}</td>
                     <td>{{ $allData222->bookseries }}</td>
                     <td>{{ $allData222->volume }}</td>
                     <td>{{ $allData222->purchasedate }}</td>
                     <td>{{ $allData222->billnumber }}</td>
                     <td>{{ $allData222->currency }}</td>
                     <td>{{ $allData222->currentprice }}</td>
                     <td>{{ $allData222->issuepermission }}</td>
                     <td>{{ $allData222->bookremarks }}</td>
                     <td><a href="{{ route('editotherbookdetail.edit',  $allData222->id) }}"
                             class="btn btn-info">Edit</a></td>
                 </tr>
                 @endforeach

                 
             </tbody>
             
         </table>
     </div>
     <!-- /.card-body -->
 </div>

 <!-- /.content-wrapper -->
 @endsection