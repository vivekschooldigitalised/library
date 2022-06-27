<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Library</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div> -->

      <!-- SidebarSearch Form
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Author
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/one" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Add Author</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View Author Detail</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Publisher
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/two" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Add Publisher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View Publisher</p>
                </a>
              </li>
            </ul>
          </li> -->
          <p>
           
              <center>  <button type="button" class="btn btn-success">Setup</button></center>
              </p>
            <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/three" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Add Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View Categories</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="{{ route('shelf.view')  }}" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Shelf
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/four" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Create Shelf</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Assign Books On Shelf</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('shelf.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Veiw Shelf Detail</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Create Book Remarks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('createremarks.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Create Remarks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('createremarksViewupdate.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View/Update Remarks</p>
                </a>
              </li>

            </ul>
          </li>
          <p>
            <br>
            <br>
                
                <center><button type="button" class="btn btn-success">Activity</button></center>
              </p>


          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Add New Books
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('scanbook.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Scan ISBN</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ route('newbook.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Add New Book</p>
                </a>
              </li> -->

              
            
             <li class="nav-item">
                <a href="{{ route('bookotherdetail.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Add Other Details</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="{{ route('book.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View/Update New Book Details</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('bookotherdetails.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>View/Update Other Book Details</p>
                </a>
              </li>

            </ul>
          </li>
          
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Issue/Return Book
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('assignbook.view') }}" class="nav-link "> 
                  <i class="icon-material-outline-business-center"></i>
                  <p>Assign Book</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="{{ route('book1.view') }}" class="nav-link "> 
                  <i class="icon-material-outline-business-center"></i>
                  <p>Return Book</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>See the total issued book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Not Returned Book</p>
                </a>
              </li> -->
            </ul>
          </li>
          <!-- <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Return
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Books Return</p>
                </a>
              </li>
                <!-- <li class="nav-item">
                <a href="/eleven" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>See the total issued book</p>
                </a>
              </li> -->
              <!-- <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Not Returned Book</p>
                </a>
              </li> -->
            </ul>
          </li>
          <br>
          <br>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link active">
              <i class="icon-material-outline-business-center"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('book11.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Books Detail</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Total Not Returned Books</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>All Issued Report</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Total Not Returned Books</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{ route('assignbook11.view') }}" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Total Books Issued</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link ">
                  <i class="icon-material-outline-business-center"></i>
                  <p>Author Wise Books Detail</p>
                </a>
              </li> -->
              
            </ul>
          </li>

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>