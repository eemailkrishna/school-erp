@include('common.header')
@include('common.navbar')
<script type="text/javascript">
function add_edit(value, name) {
    var subject = name.split('|?|');
    $('#subject_code_hidden').val(value);
    $('#subject').val(subject[1]);
    $('#subject_hindi').val(subject[0]);
}

function form_submit() {

    $("#modal_close1").click();
    $.ajax({
        type: "POST",
        url: access_link + "school_info/subject_add_api.php",
        data: $("#my_form").serialize(),
        success: function(detail) {
            $('#myModal12').modal('hide');
            var res = detail.split("|?|");
            if (res[1] == 'success') {


                get_content('school_info/subject_add');

            }
        }
    });
}
</script>

<section class="content-header">
    <h1>
        School Information Management <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/school_info')}}"><i class="fa fa-graduation-cap"></i> School Info</a></li>
        <li class="active">Add Subject</li>
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

            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Registration form--------------------------------------------------->

            <div class="box-body">

                <div class="col-md-6 box-body table-responsive">
                    <h4 class="box-title">Add Subject</h4>
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Subject Name</th>
                                <th>Subject Name Hindi</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr align='center'>

                                <th>1</th>
                                <th>SCIENCE</th>
                                <th>???????????????</th>
                                <th><button type="button" id="subject1" name="???????????????|?|SCIENCE" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>2</th>
                                <th>CHEMISTRY</th>
                                <th></th>
                                <th><button type="button" id="subject2" name="|?|CHEMISTRY" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>3</th>
                                <th>AG BIO</th>
                                <th></th>
                                <th><button type="button" id="subject3" name="|?|AG BIO" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>4</th>
                                <th>HINDI</th>
                                <th>?????????????????? </th>
                                <th><button type="button" id="subject4" name="?????????????????? |?|HINDI" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>5</th>
                                <th>S.S.</th>
                                <th></th>
                                <th><button type="button" id="subject5" name="|?|S.S." class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>6</th>
                                <th>SANSKRIT</th>
                                <th></th>
                                <th><button type="button" id="subject6" name="|?|SANSKRIT" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>7</th>
                                <th>Bangali</th>
                                <th></th>
                                <th><button type="button" id="subject7" name="|?|Bangali" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>8</th>
                                <th>Biology M</th>
                                <th>??????????????????????????????</th>
                                <th><button type="button" id="subject8" name="??????????????????????????????|?|Biology M"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>9</th>
                                <th>Chemistry</th>
                                <th>??????????????? ?????????????????????</th>
                                <th><button type="button" id="subject9" name="??????????????? ?????????????????????|?|Chemistry"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>10</th>
                                <th>Physics</th>
                                <th>??????????????? ?????????????????????</th>
                                <th><button type="button" id="subject10" name="??????????????? ?????????????????????|?|Physics"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>11</th>
                                <th>Maths </th>
                                <th>????????????</th>
                                <th><button type="button" id="subject11" name="????????????|?|Maths " class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>12</th>
                                <th>Biotechnology</th>
                                <th>????????? ????????????????????????????????????</th>
                                <th><button type="button" id="subject12" name="????????? ????????????????????????????????????|?|Biotechnology"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>13</th>
                                <th>Sociology</th>
                                <th>?????????????????? ????????????????????? </th>
                                <th><button type="button" id="subject13" name="?????????????????? ????????????????????? |?|Sociology"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>14</th>
                                <th>Psychology</th>
                                <th> ??????????????????????????????</th>
                                <th><button type="button" id="subject14" name=" ??????????????????????????????|?|Psychology"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>15</th>
                                <th>Political Science</th>
                                <th>????????????????????? ?????????????????????</th>
                                <th><button type="button" id="subject15" name="????????????????????? ?????????????????????|?|Political Science"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>16</th>
                                <th>DRAWING</th>
                                <th></th>
                                <th><button type="button" id="subject16" name="|?|DRAWING" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>17</th>
                                <th>History</th>
                                <th>??????????????????</th>
                                <th><button type="button" id="subject17" name="??????????????????|?|History" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>18</th>
                                <th>Geography</th>
                                <th>???????????????</th>
                                <th><button type="button" id="subject18" name="???????????????|?|Geography"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>19</th>
                                <th>Economics</th>
                                <th>?????????????????????????????????</th>
                                <th><button type="button" id="subject19" name="?????????????????????????????????|?|Economics"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>20</th>
                                <th>Anatomy</th>
                                <th>?????????????????????</th>
                                <th><button type="button" id="subject20" name="?????????????????????|?|Anatomy"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>21</th>
                                <th>Agriculture</th>
                                <th>????????????</th>
                                <th><button type="button" id="subject21" name="????????????|?|Agriculture"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>22</th>
                                <th>Home Management</th>
                                <th>????????? ?????????????????????</th>
                                <th><button type="button" id="subject22" name="????????? ?????????????????????|?|Home Management"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>23</th>
                                <th>Element Science</th>
                                <th>???????????? ?????????????????????</th>
                                <th><button type="button" id="subject23" name="???????????? ?????????????????????|?|Element Science"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>24</th>
                                <th>Business</th>
                                <th>?????????????????????</th>
                                <th><button type="button" id="subject24" name="?????????????????????|?|Business"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>25</th>
                                <th>Book Keeping & Accountancy</th>
                                <th> ????????????????????? ????????? ???????????? ????????????????????? </th>
                                <th><button type="button" id="subject25"
                                        name=" ????????????????????? ????????? ???????????? ????????????????????? |?|Book Keeping & Accountancy"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>26</th>
                                <th>Crop Production</th>
                                <th>????????? ??????????????????</th>
                                <th><button type="button" id="subject26" name="????????? ??????????????????|?|Crop Production"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>27</th>
                                <th>Element of Animal</th>
                                <th>????????? ?????? ????????????</th>
                                <th><button type="button" id="subject27" name="????????? ?????? ????????????|?|Element of Animal"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>28</th>
                                <th>Computer</th>
                                <th>????????????????????????</th>
                                <th><button type="button" id="subject28" name="????????????????????????|?|Computer"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>29</th>
                                <th>General Knowledge</th>
                                <th>????????????????????? ???????????????</th>
                                <th><button type="button" id="subject29" name="????????????????????? ???????????????|?|General Knowledge"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>30</th>
                                <th>Information</th>
                                <th>??????????????? ???????????????</th>
                                <th><button type="button" id="subject30" name="??????????????? ???????????????|?|Information"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>31</th>
                                <th>SCIENCE</th>
                                <th></th>
                                <th><button type="button" id="subject31" name="|?|SCIENCE" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>32</th>
                                <th>GK OR COMPUTER</th>
                                <th>????????????????????? ??????????????? ?????? ????????????????????????</th>
                                <th><button type="button" id="subject32"
                                        name="????????????????????? ??????????????? ?????? ????????????????????????|?|GK OR COMPUTER" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>33</th>
                                <th>Economics </th>
                                <th></th>
                                <th><button type="button" id="subject33" name="|?|Economics " class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>34</th>
                                <th>Bussines Study</th>
                                <th></th>
                                <th><button type="button" id="subject34" name="|?|Bussines Study"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>35</th>
                                <th>HINDI SAHITYA</th>
                                <th></th>
                                <th><button type="button" id="subject37" name="|?|HINDI SAHITYA" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>36</th>
                                <th>Elements of Physics</th>
                                <th>?????????????????? ?????? ????????????</th>
                                <th><button type="button" id="subject41" name="?????????????????? ?????? ????????????|?|Elements of Physics"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>37</th>
                                <th>ENGLISH</th>
                                <th>???????????????????????? </th>
                                <th><button type="button" id="subject46" name="???????????????????????? |?|ENGLISH"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>
                            <tr align='center'>
                                <th colspan="4"><button type="button" id="subject35" name="|?|" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add More</th>
                        </tbody>

                    </table>
                </div>

                <div class="col-md-6 box-body table-responsive">
                    <h4 class="box-title"> Practical Subject Add</h4>
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Subject Name</th>
                                <th>Subject Name Hindi</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr align='center'>

                                <th>1</th>
                                <th>Games</th>
                                <th></th>
                                <th><button type="button" id="practical3" name="|?|Games" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>2</th>
                                <th>Animal Husbandry And Poultary Farm</th>
                                <th>????????????????????? ?????? ???????????????????????? ???????????????</th>
                                <th><button type="button" id="practical9"
                                        name="????????????????????? ?????? ???????????????????????? ???????????????|?|Animal Husbandry And Poultary Farm"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>3</th>
                                <th>ORGANIC CHEMISTRY </th>
                                <th></th>
                                <th><button type="button" id="practical12" name="|?|ORGANIC CHEMISTRY "
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>

                            <tr align='center'>

                                <th>4</th>
                                <th>computer</th>
                                <th>hindi</th>
                                <th><button type="button" id="practical13" name="hindi|?|computer"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>
                            <tr align='center'>
                                <th colspan="4"><button type="button" id="practical1" name="|?|" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add More</th>
                        </tbody>

                    </table>
                    <h4 class="box-title"> Other Subject Add</h4>
                    <table id="table-data" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.no.</th>
                                <th>Subject Name</th>
                                <th>Subject Name Hindi</th>
                                <th>Add/Edit</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr align='center'>

                                <th>1</th>
                                <th>testr</th>
                                <th>test</th>
                                <th><button type="button" id="other_subject1" name="test|?|testr"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>2</th>
                                <th>Cleanliness</th>
                                <th>????????????</th>
                                <th><button type="button" id="other_subject2" name="????????????|?|Cleanliness"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>3</th>
                                <th>Regularity</th>
                                <th>????????????????????????</th>
                                <th><button type="button" id="other_subject3" name="????????????????????????|?|Regularity"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>4</th>
                                <th>Homework</th>
                                <th>?????????????????????</th>
                                <th><button type="button" id="other_subject4" name="?????????????????????|?|Homework"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>5</th>
                                <th>Computer</th>
                                <th>????????????????????????</th>
                                <th><button type="button" id="other_subject5" name="????????????????????????|?|Computer"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>6</th>
                                <th>Project Work</th>
                                <th>??????????????????????????? ???????????? </th>
                                <th><button type="button" id="other_subject6" name="???????????????????????????  ???????????? |?|Project Work"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>7</th>
                                <th>MATH</th>
                                <th></th>
                                <th><button type="button" id="other_subject7" name="|?|MATH" class="btn btn-success"
                                        onclick="add_edit(this.id,this.name)" data-toggle="modal"
                                        data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>8</th>
                                <th>LIFE SKILL & VALUE</th>
                                <th></th>
                                <th><button type="button" id="other_subject8" name="|?|LIFE SKILL & VALUE"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>


                            <tr align='center'>

                                <th>9</th>
                                <th>GK & DRAWING</th>
                                <th></th>
                                <th><button type="button" id="other_subject10" name="|?|GK & DRAWING"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add/Edit</th>

                            </tr>
                            <tr align='center'>
                                <th colspan="4"><button type="button" id="other_subject9" name="|?|"
                                        class="btn btn-success" onclick="add_edit(this.id,this.name)"
                                        data-toggle="modal" data-target="#myModal12">Add More</th>
                        </tbody>

                    </table>
                </div>
                <div class="modal fade myModal121223" id="myModal12" role="dialog">
                    <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Subject Name Add Edit</label>
                                        <input type="text" name="subject" id="subject" class="form-control">
                                        <input type="hidden" name="subject_code_hidden" id="subject_code_hidden"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Subject Name Hindi Add Edit</label>
                                        <input type="text" name="subject_hindi" id="subject_hindi" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" data-dismiss="modal" onclick="form_submit();" value="Add"
                                        class="btn btn-success" />
                                    <button type="button" id="modal_close1" class="btn btn-default"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>


            </div>
            <!---------------------------------------------End Registration form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
@include('common.footer')