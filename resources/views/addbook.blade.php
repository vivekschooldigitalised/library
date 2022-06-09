 <!-- Content Wrapper. Contains page content -->
 @extends('layouts.app')
 @section('content')

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

 <style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
}

#regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Raleway;
    padding: 40px;
    width: 70%;
    min-width: 300px;
}

h1 {
    text-align: center;
}

input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
    background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
    display: none;
}

button {
    background-color: #04AA6D;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Raleway;
    cursor: pointer;
}

button:hover {
    opacity: 0.8;
}

#prevBtn {
    background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
}

.step.active {
    opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
    background-color: #04AA6D;
}
 </style>

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
     @if (\Session::has('success'))
     <div class="alert alert-success">
         <ul>
             <li>{!! \Session::get('success') !!}</li>
         </ul>
     </div>
     @endif
     <!-- Main content -->
     <div class="content">
         <div class="container-fluid">
             <div class="row">
                 <!-- left column -->
                 <div class="col-md-2">
                 </div>
                 <div class="col-md-8">

                     <!-- Input addon -->
                     <div class="card card-info">
                         <div class="card-header">
                             <h3 class="card-title">Add New Book Detail</h3>
                         </div>
                         <div class="card-body">


                             <form method="post" id="regForm" action="{{ route('newbook.store') }}">
                                 @csrf

                                 <!-- One "tab" for each step in the form: -->

                                 <div class="tab">
                                     <h1>Add New Book Detail</h1>
                                     <label class="control-label ">Enter The ISBN Number of Book </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="isbn">
                                         <span class="input-group-append">
                                     </div>

                                     <label class="control-label ">Enter The Title of Book </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="title">
                                         <span class="input-group-append">
                                     </div>

                                     <label class="control-label ">Author Name </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="author">
                                         <span class="input-group-append">
                                     </div>

                                     <label class="control-label ">Publisher Name </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="publisher">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Language </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="language">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Edition </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="edition">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Number Of Pages </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="numofpages">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Price </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="price">
                                         <span class="input-group-append">
                                     </div>
                                 </div>


                                 <div class="tab">
                                     <label class="control-label mx-2">Category </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <select name="category" id="class_id" oninput="this.className = ''" required=""
                                             class="form-control">
                                             @foreach($categories as $category)
                                             <option value="{{ $category->id }}">{{ $category->name }}</option>
                                             @endforeach
                                         </select>
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label mx-2">Select Shelf </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <!-- <p>Publisher</p> -->
                                         <select name="newshelf" id="class_id" oninput="this.className = ''" required=""
                                             class="form-control">
                                             @foreach($newshelf as $newshelf)
                                             <option value="{{ $newshelf->id }}">{{ $newshelf->name }}</option>
                                             @endforeach
                                         </select>
                                         <span class="input-group-append">
                                     </div>
                                     <!-- <label class="control-label ">Total Number Of Books </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="numofbooks">
                                         <span class="input-group-append">
                                     </div> -->

                                     <!-- <table class="table" name='assessment[]'>
                                         <thead>
                                             <tr>
                                                 <!-- <th scope="col">Student Admission Number</th> -->
                                                 <!-- <th scope="col">ISBN Number</th>
                                                 <th scope="col">Title Name</th>
                                                 <th scope="col">Author</th>
                                                 <th scope="col">Publisherr</th>
                                                 <th scope="col">Add Accessment Number</th>
                                                 <th scope="col"><a href="javascript:;" class="btn btn-info addRow">+</a>

                                             </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td><input type="text" name="assessment[]" id="assessment"></td>
                                             
                                             <td><a href="javascript:;"
                                                     class="btn btn-danger deleteRow">-</a>
                                             </th>
                                         </tr>                                   

                                         </tbody>
                                     </table>
                                     <script>
                                     $('thead').on('click', '.addRow', function() {
                                          var tr = '<tr>'+
                                             '<td>'+
                                             '<input type="text" name="assessment[]" id="assessment"></td>'+
                                             '<td><a href="javascript:;" class="btn btn-danger deleteRow">-</a></td>'+
                                             
                                         '</tr>';

                                         $('tbody').append(tr);
                                     });

                                     $('tbody').on('click','.deleteRow', function(){
                                         $(this).parent().parent().remove();
                                     })
                                     </script> -->


                                     <label class="control-label ">Assessment Number</label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="assessment">
                                         <span class="input-group-append">
                                     </div>

                                     <label class="control-label ">Book Series</label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="book_series">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Volume </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="volume">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Purchase Date </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="date" class="form-control" oninput="this.className = ''"
                                             name="purchasedate">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Bill Number </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="billnumber">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Currency </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="currency">
                                         <span class="input-group-append">
                                     </div>
                                     <label class="control-label ">Current Price </label>
                                     <div class="input-group input-group-sm mb-3">
                                         <input type="text" class="form-control" oninput="this.className = ''"
                                             name="currentprice">
                                         <span class="input-group-append">
                                     </div>
                                 </div>

                                 <div style="overflow:auto;">
                                     <div style="float:right;">
                                         <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                         <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                     </div>
                                 </div>
                                 <!-- Circles which indicates the steps of the form: -->
                                 <div style="text-align:center;margin-top:40px;">
                                     <span class="step"></span>
                                     <span class="step"></span>
                                     <span class="step"></span>
                                     <span class="step"></span>
                                     <span class="step"></span>
                                 </div>
                             </form>












                             <form method="post" action="{{ route('newbook.store') }}">
                                 @csrf

                                 </span>
                             </form>
                             <!-- /input-group -->
                         </div>
                         <!-- /.card-body -->
                     </div>
                     <!-- /.card -->


                 </div>
                 <!--/.col (right) -->

                 <div class="col-md-2">
                 </div>


             </div>
             <!-- /.row -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content -->
 </div>

 <!-- /.content-wrapper -->



 <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
 </script>

 @endsection