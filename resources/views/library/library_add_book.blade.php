@include('common.header')
@include('common.navbar')
<script>
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "library/library_add_book_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);

            console.log(detail)
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                if (res[2] == 'view') {
                    alert_new('Successfully Complete', 'green');
                    get_content('library/view_book_library');
                } else {
                    alert_new('Please allot Unique Accession No...', 'red');
                    get_content('library/library_add_book');
                }
            }
        }
    });
});
</script>
<section class="content-header">
    <h1>
        Library Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/library')}}"><i class="fa fa-book"></i> Library</a></li>
        <li class="active">Add Book</li>
    </ol>

</section>



<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <center>
                    <h3 class="box-title" style="color:#592712;font-size:30px;"><b>BOOK ACQUISITION</b></h3>
                </center></br></br></br>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body ">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Accession NO./Book No.<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="book_id_no" placeholder="Enter Book Accession No." value=""
                                class="form-control " required />
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Book Code No.</label>
                            <input type="text" name="book_code_number" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Division Name</label>
                            <input type="text" name="division_name" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Language</label>
                            <input type="text" name="language" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Book Type</label>
                            <input type="text" name="book_type" value="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Book Title<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="book_title" placeholder="Enter book title" value=""
                                class="form-control" required />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Author<font style="color:red"><b>*</b></font></label>
                            <input type="text" name="author" placeholder="Enter Author name" value=""
                                class="form-control" required />
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Classification No./Main Class<font style="color:red"><b>*</b></font></label>
                            <select class="form-control" name="student_class" required>
                                <option value="">Select Class</option>
                                <option value="NURSERY">NURSERY</option>
                                <option value="LKG">LKG</option>
                                <option value="UKG">UKG</option>
                                <option value="1ST">1ST</option>
                                <option value="2ND">2ND</option>
                                <option value="3RD">3RD</option>
                                <option value="4TH">4TH</option>
                                <option value="5TH">5TH</option>
                                <option value="6TH">6TH</option>
                                <option value="7TH">7TH</option>
                                <option value="8TH">8TH</option>
                                <option value="9TH">9TH</option>
                                <option value="10TH">10TH</option>
                                <option value="11TH">11TH</option>
                                <option value="12TH">12TH</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Enter subject Name">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Publisher</label>
                            <input type="text" class="form-control" name="publish_name" placeholder="Enter publication">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Publication Date</label>
                            <input type="date" class="form-control" name="publish_date">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>No. Of Copies</label>
                            <input type="Number" class="form-control" name="no_of_copy" placeholder="Enter No of Book">
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Vendor</label>
                            <input type="text" class="form-control" name="Vendor_name" placeholder="Enter Vendor Name">
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Cost of Book<font style="color:red"><b>*</b></font></label>
                            <input type="Number" class="form-control" name="book_cost" placeholder="Enter book cost"
                                required>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Entry Date</label>
                            <input type="date" name="entry_date" value="2022-12-05" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="form-group">
                            <label>Other Information</label>
                            <input type="text" name="other_information" value="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-success" /></center>
                    </div>
                </form>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer');