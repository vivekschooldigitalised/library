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
                <h3 class="card-title">All Books Detail</h3>
                <br>
                             <button id="btnExport" onClick="fnExcelReport()">Export to Excel</button>
              </div>


              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><span class="dt-down-arrow"></span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12">
                  
                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                 
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

                  <form method="post" action="">
                @csrf

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
</form>
                
                </tbody>
                
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>

            
                <iframe id="dummyFrame" style="display:none"></iframe>

<script>
function fnExcelReport() {
    var table = document.getElementById('example2'); // id of table
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

