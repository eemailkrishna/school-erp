@include('common.header')
@include('common.navbar')
</head>
<script type="text/javascript">
$(function() {
    $("#table-data").on('click', 'input.addButton', function() {
        var $tr = $(this).closest('tr');
        var allTrs = $tr.closest('table').find('tr');
        var lastTr = allTrs[allTrs.length - 1];
        var $clone = $(lastTr).clone();
        $clone.find('td').each(function() {
            var el = $(this).find(':first-child');
            var id = el.attr('id') || null;
            if (id) {
                var i = id.substr(id.length - 1);
                var prefix = id.substr(0, (id.length - 1));
            }
        });
        $clone.find('input:text').val('');
        $tr.closest('table').append($clone);
    });
});
</script>
<script type="text/javascript">
var deleteRow = function(link) {
    var row = link.parentNode.parentNode;
    var table = row.parentNode;
    table.removeChild(row);

}
$("#my_form").submit(function(e) {
    e.preventDefault();
    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/add_sports_api.php",
        type: "POST",
        data: formdata,
        mimeTypes: "multipart/form-data",
        contentType: false,
        cache: false,
        processData: false,
        success: function(detail) {
            ////alert_new(detail);
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Complete', 'green');
                get_content('sports/add_sports');
            }
        }
    });
});
</script>
<script>
function valid(s_no) {
    var myval = confirm("Are you sure want to delete this record !!!!");
    if (myval == true) {
        sports_delete(s_no);
    } else {
        return false;
    }
}

function sports_delete(s_no) {
    $("#get_content").html(loader_div);
    $.ajax({
        type: "POST",
        url: access_link + "sports/delete_sports.php?id=" + s_no + "",
        cache: false,
        success: function(detail) {
            var res = detail.split("|?|");
            if (res[1] == 'success') {
                alert_new('Successfully Deleted', 'green');
                get_content('sports/add_sports');
            } else {
                //alert_new(detail); 
            }
        }
    });
}
</script>
<section class="content-header">
    <h1>
        Sports Management
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}" #><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Sports</li>
    </ol>
</section>
<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top  ">
            <div class="box-header with-border ">
                <h3 class="box-title">Sports Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">

                    <div class="col-md-12">
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <label>Sports Name<font style="color:red"><b>*</b></font></label>
                                <center><input type="text" name="sports_name" placeholder="Sports Add" value=""
                                        class="form-control" required></center>
                            </div>
                        </div>
                        <div class="col-md-3 "></div>

                        <div class="col-md-6">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 box-body table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Sports Name</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Cricket</td>
                                            <td><button type="button" onclick="return valid('2');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>2</td>
                                            <td>Running</td>
                                            <td><button type="button" onclick="return valid('8');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>3</td>
                                            <td>kho kho</td>
                                            <td><button type="button" onclick="return valid('9');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>4</td>
                                            <td>Bedminton</td>
                                            <td><button type="button" onclick="return valid('10');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>5</td>
                                            <td>long jump</td>
                                            <td><button type="button" onclick="return valid('11');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>6</td>
                                            <td>high jump</td>
                                            <td><button type="button" onclick="return valid('13');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>7</td>
                                            <td>NADI PAHAD</td>
                                            <td><button type="button" onclick="return valid('15');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>8</td>
                                            <td>hoky</td>
                                            <td><button type="button" onclick="return valid('17');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>9</td>
                                            <td>football</td>
                                            <td><button type="button" onclick="return valid('18');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>10</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('19');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>11</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('20');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>12</td>
                                            <td>फूत्बल्ल</td>
                                            <td><button type="button" onclick="return valid('21');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>13</td>
                                            <td>Bedminton</td>
                                            <td><button type="button" onclick="return valid('22');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>14</td>
                                            <td>Basket Ball</td>
                                            <td><button type="button" onclick="return valid('23');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>15</td>
                                            <td>Chess</td>
                                            <td><button type="button" onclick="return valid('24');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>16</td>
                                            <td>Keram</td>
                                            <td><button type="button" onclick="return valid('25');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>17</td>
                                            <td>Basket ball </td>
                                            <td><button type="button" onclick="return valid('26');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>18</td>
                                            <td>kho kho</td>
                                            <td><button type="button" onclick="return valid('27');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>19</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('28');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>20</td>
                                            <td>football</td>
                                            <td><button type="button" onclick="return valid('29');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>21</td>
                                            <td>cricket </td>
                                            <td><button type="button" onclick="return valid('30');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>22</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('31');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>23</td>
                                            <td>Football</td>
                                            <td><button type="button" onclick="return valid('32');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>24</td>
                                            <td>Football</td>
                                            <td><button type="button" onclick="return valid('33');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>25</td>
                                            <td>teakndow</td>
                                            <td><button type="button" onclick="return valid('34');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>26</td>
                                            <td>Fancey </td>
                                            <td><button type="button" onclick="return valid('35');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>27</td>
                                            <td>football</td>
                                            <td><button type="button" onclick="return valid('36');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>28</td>
                                            <td>Cricket</td>
                                            <td><button type="button" onclick="return valid('38');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>29</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('39');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>30</td>
                                            <td>kho kho</td>
                                            <td><button type="button" onclick="return valid('41');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>31</td>
                                            <td>cricket</td>
                                            <td><button type="button" onclick="return valid('42');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>32</td>
                                            <td>swiming</td>
                                            <td><button type="button" onclick="return valid('43');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>33</td>
                                            <td>testing</td>
                                            <td><button type="button" onclick="return valid('44');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>34</td>
                                            <td>hollyboll</td>
                                            <td><button type="button" onclick="return valid('45');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>35</td>
                                            <td>football</td>
                                            <td><button type="button" onclick="return valid('46');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>36</td>
                                            <td>kho kho</td>
                                            <td><button type="button" onclick="return valid('47');"
                                                    class="btn btn-success">
                                                    Delete</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

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
<script>
$(function() {
    $('#example1').DataTable()
})
</script>

@include('common.footer')