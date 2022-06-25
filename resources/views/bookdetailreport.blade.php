 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <script src="{{asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js') }}"></script>

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
                             <h3 class="card-title">Issue The Book</h3>                          
                         </div>
                         
                         <div class="card-body">

                         <button id="btnExport" class="btn btn-info" onClick="fnExcelReport()">Export to Excel</button><br> <br>

                             <form method="get" action="{{ route('book11.view') }}">
                                 @csrf
                                 <table id="example9" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                                     <thead>
                                         <tr>
                                         <th >Sr. No</th>
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
                                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Book Remarks</th>
                                                 <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                 Issue Permission</th>

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
                                         <td>{{ $data11->shelf }}</td>
                                         <td>{{ $data11->bookremarks }}</td>
                                         <td>{{ $data11->issuepermission }}</td>

                                     </tr>
                         
                                     @endforeach

                             

                                     </tbody>

                                 </table>
                             </form>
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

                         <!-- /input-group -->
                     </div>
                     <!-- /.card-body -->
                 </div>
                 <!-- /.card -->


             </div>
             <!--/.col (right) -->

             <div class="col-md-12">

             <iframe id="dummyFrame" style="display:none"></iframe>

<script>
function fnExcelReport() {
    var table = document.getElementById('example9'); // id of table
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


                 @endsection