@include('common.header')
@include('common.navbar')
<script>
function for_list() {
    var from_date = document.getElementById('from_date').value;
    var to_date = document.getElementById('to_date').value;
    var bus_id = document.getElementById('bus_id').value;

    $("#pdf_detail").html('');

    if (from_date != '' && to_date != '') {
        $("#pdf_detail").html(loader_div);
        $.ajax({
            type: "POST",
            url: access_link + "bus/ajax_bus_expense_report.php?from_date=" + from_date + "&to_date=" +
                to_date + "&bus_id=" + bus_id + "",
            cache: false,
            success: function(detail) {
                $("#pdf_detail").html(detail);
            }
        });
    }

}
</script>
<script>
function for_print() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}
</script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Download Bus Expense Report
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('/bus')}}"><i class="fa fa-money"></i> Bus Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Bus Expense Report</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Bus Expense Report download</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">

                <div class="col-md-12 col-md-offset-2" id="search_detail">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bus Detail</label>
                            <select class="form-control" name="bus_id" id="bus_id" onchange="for_list();" required>
                                <option value="All">All</option>
                                <option value="51">BHARAT BENZ [BHARAT BENZ]-[4D34i]-[MH19TS0001]</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>From Date</label>
                            <input type="date" name="from_date" class="form-control" id="from_date" value="2022-12-13"
                                oninput="for_list();" />
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label>To Date</label>
                            <input type="date" name="to_date" class="form-control" id="to_date" value="2022-12-13"
                                oninput="for_list();" />
                        </div>
                    </div>

                </div>

                </br></br></br>
                <hr>

                <div class="col-md-12" id="pdf_detail">

                </div>

            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>

<script>
function exportTableToExcel(tableID, filename = '') {
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }
}
</script>
<script>
for_list();
</script>

@include('common.footer')