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
                             <h3 class="card-title">All Books Detail</h3>
                             <br>
                           
                         </div>
                     
                 
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">







                     <button id="btnExport" class="btn btn-info" onClick="fnExcelReport()">Export to xls</button><br><br>



                         <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                             aria-describedby="example1_info">
                             <thead>
                                 <tr>

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

                                 <form method="post" action="">
                                     @csrf

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
                                 </form>

                             </tbody>
                             <tfoot>

                             </tfoot>
                         </table>

                         <iframe id="dummyFrame" style="display:none"></iframe>

                         <script>
                         function fnExcelReport() {
                             var table = document.getElementById('example1'); // id of table
                             var tableHTML = table.outerHTML;
                             var fileName = 'download.xls';

                             var msie = window.navigator.userAgent.indexOf("MSIE ");

                             // If Internet Explorer
                             if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
                                 dummyFrame.document.open('txt/html', 'replace');
                                 dummyFrame.document.write(tableHTML);
                                 dummyFrame.document.close();
                                 dummyFrame.focus();
                                 return dummyFrame.document.execCommand('SaveAs', true, fileName);
                             }
                             //other browsers
                             else {
                                 var a = document.createElement('a');
                                 tableHTML = tableHTML.replace(/  /g, '').replace(/ /g, '%20'); // replaces spaces
                                 a.href = 'data:application/vnd.ms-excel,' + tableHTML;
                                 a.setAttribute('download', fileName);
                                 document.body.appendChild(a);
                                 a.click();
                                 document.body.removeChild(a);
                             }
                         }
                         </script>
















                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12 col-md-5">
                         <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to
                             10 of 57 entries</div>
                     </div>
                     <div class="col-sm-12 col-md-7">
                         <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                             <ul class="pagination">
                                 <li class="paginate_button page-item previous disabled" id="example1_previous"><a
                                         href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"
                                         class="page-link">Previous</a></li>
                                 <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                         data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                         data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                         data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                         data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                         data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                 <li class="paginate_button page-item "><a href="#" aria-controls="example1"
                                         data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                 <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                         aria-controls="example1" data-dt-idx="7" tabindex="0"
                                         class="page-link">Next</a></li>
                             </ul>
                         </div>
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