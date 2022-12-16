@include('common.header')
@include('common.navbar')

<style type="text/css">
.result {
    position: absolute;
    z-index: 999;
    top: 80%;
    left: 0;
    background: white;
}

.search-box input[type="text"],
.result {
    width: 90%;
    margin-left: 5%;
    box-sizing: border-box;
}

/* Formatting result items */
.result p {
    margin: 0;
    padding: 7px 10px;
    border: 1px solid #CCCCCC;
    border-top: none;
    cursor: pointer;
}

.result p:hover {
    background: #f2f2f2;
}
</style>

<script type="text/javascript">
function fill_detail(value) {

    $("#student_roll_no").val('Loading.....');
    $("#student_name").val('Loading.....');
    $("#student_class").val('Loading.....');
    $("#student_section").val('Loading.....');
    $("#student_father_name").val('Loading.....');
    $("#contact_no").val('Loading.....');
    $("#gender").val('Loading.....');
    //$("#dateofbirth").val('Loading.....');
    $("#student_category").val('Loading.....');
    $("#student_roll").val('Loading.....');
    $("#session_value").val('Loading.....');
    //$("#student_photo_hidden").val(res[10]);
    $("#student_adhar_number").val('Loading.....');
    $("#student_admission_number").val('Loading.....');
    $("#student_scholar_number").val('Loading.....');
    //$("#company_name11").val(res[14]);
    $("#student_mother_name").val('Loading.....');
    //$("#actualdate").val(res[16]);
    $("#age_year").val('Loading.....');

    $.ajax({
        address: "POST",
        url: access_link + "sports/ajax_search_student_box.php?id=" + value + "",
        cache: false,
        success: function(detail) {

            var str = detail;
            var res = str.split("|?|");
            $("#student_roll_no").val(value);
            $("#student_name").val(res[0]);
            $("#student_class").val(res[1]);
            $("#student_section").val(res[2]);
            $("#student_father_name").val(res[3]);
            $("#contact_no").val(res[4]);
            $("#gender").val(res[5]);
            $("#dateofbirth").val(res[6]);
            $("#student_category").val(res[7]);
            $("#student_roll").val(res[8]);
            $("#session_value").val(res[9]);
            $("#show_student_photo").attr("src", "data:image;base64," + res[10]);
            //$("#student_photo_hidden").val(res[10]);
            $("#student_adhar_number").val(res[11]);
            $("#student_admission_number").val(res[12]);
            $("#student_scholar_number").val(res[13]);
            $("#company_name11").val(res[14]);
            $("#student_mother_name").val(res[15]);
            $("#actualdate").val(res[16]);
            $("#age_year").val(res[17]);
            $("#show_documents").attr("src", "data:image;base64," + res[18]);
            //$("#dob_certificate").val(res[18]);
            ////alert_new(detail);
        }
    });

}
$("#my_form").submit(function(e) {
    e.preventDefault();

    var formdata = new FormData(this);
    window.scrollTo(0, 0);
    loader();
    $.ajax({
        url: access_link + "sports/add_participate_api.php",
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
                get_content('sports/participate_list');
            }
        }
    });
});
</script>

<section class="content-header">
    <h1>
        Participation Form
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('sports')}}"><i class="fa fa-futbol-o"></i> Sport Management</a></li>
        <li class="active"><i class="fa fa-user-plus"></i> Add Participation</li>
    </ol>
</section>
<!---***********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <!-- general form elements disabled -->
        <div class="box box-warning my_border_top">
            <div class="box-header with-border ">
                <h3 class="box-title">Participation Form</h3>
            </div>
            <!-- /.box-header -->
            <!------------------------------------------------Start Participate form--------------------------------------------------->

            <div class="box-body">
                <form role="form" method="post" enctype="multipart/form-data" id="my_form">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sports Name<font style="color:red"><b>*</b></font></label>
                                <select name="sports_name" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="फूत्बल्ल">फूत्बल्ल</option>
                                    <option value="Basket Ball">Basket Ball</option>
                                    <option value="Bedminton">Bedminton</option>
                                    <option value="Chess">Chess</option>
                                    <option value="Cricket">Cricket</option>
                                    <option value="Fancey ">Fancey </option>
                                    <option value="football">football</option>
                                    <option value="high jump">high jump</option>
                                    <option value="hoky">hoky</option>
                                    <option value="hollyboll">hollyboll</option>
                                    <option value="Keram">Keram</option>
                                    <option value="kho kho">kho kho</option>
                                    <option value="long jump">long jump</option>
                                    <option value="NADI PAHAD">NADI PAHAD</option>
                                    <option value="Running">Running</option>
                                    <option value="swiming">swiming</option>
                                    <option value="teakndow">teakndow</option>
                                    <option value="testing">testing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Name<font size="2" style="font-weight: normal;">(Search by Name)</font>
                                    <span style="color:red;">*</span></label>
                                <select name="" style="width:100%;" class="form-control select2"
                                    onchange="fill_detail(this.value);">
                                    <option value="">Select Student</option>
                                    <option value="2000296">ajit[2000296-Male]-[2ND-B]-[Satveer-9050653720]</option>
                                    <option value="2000297">REHAN[2000297-Male]-[2ND-B]-[FARHAT ALI-8077194624]</option>
                                    <option value="2000314">Rajesh Prasad[2000314-Male]-[2ND-B]-[Ananda
                                        Prasad-9135956095]</option>
                                    <option value="2000332">Palak Kumari[2000332-Male]-[2ND-B]-[Krishna
                                        Sahani-9876543210]</option>
                                    <option value="2000345">joy[2000345-Female]-[3RD-A]-[peter-8893387594]</option>
                                    <option value="2100412">Upen[2100412-Male]-[3RD-A]-[Rajdev Mishra-8601727725]
                                    </option>
                                    <option value="2100414">Saurya[2100414-Male]-[4TH-A]-[Sanjeev Kumar-9456930082]
                                    </option>
                                    <option value="2100415">dummy[2100415-Male]-[2ND-B]-[dummy father -1234567890]
                                    </option>
                                    <option value="2100427">Akhil[2100427-Male]-[2ND-A]-[Mr. Manoj-9719433442]</option>
                                    <option value="2100430">Sangita[2100430-Female]-[UKG-A]-[Ramji-9827185031]</option>
                                    <option value="2100437">cddf[2100437-Male]-[3RD-A]-[-6]</option>
                                    <option value="2100450">umesh dhakad[2100450-Male]-[UKG-A]-[mr ramgopal
                                        dhakad-8269548476]</option>
                                    <option value="2100451">Humaira[2100451-Female]-[UKG-A]-[Palash-1316543133]</option>
                                    <option value="2100458">ayush koli[2100458-Male]-[UKG-A]-[prabhu dayal-9826390607]
                                    </option>
                                    <option value="2100470">ajay kewat[2100470-Male]-[3RD-A]-[durga kewat-]</option>
                                    <option value="2100471">Aman[2100471-Male]-[4TH-A]-[Asad-9634569635]</option>
                                    <option value="2100474">raja[2100474-Male]-[3RD-A]-[raja-1234567891]</option>
                                    <option value="2100520">Nikhil Lodhi[2100520-Male]-[4TH-A]-[Mayank Lodhi-8679458246]
                                    </option>
                                    <option value="2100536">RAJESH[2100536-Male]-[11TH-A]-[TARACHANDRA-9839458652]
                                    </option>
                                    <option value="2100537">Vaidik[2100537-Male]-[5TH-A]-[-9974301792]</option>
                                    <option value="2100538">Diviya prajapati[2100538-Male]-[4TH-A]-[Shrawan
                                        Ram-9571176454]</option>
                                    <option value="2100541">Sagar Singh[2100541-Male]-[7TH-A]-[Rakesh Singh-1234567890]
                                    </option>
                                    <option value="2100544">Jidan uddin[2100544-Male]-[1ST-A]-[riyaz uddin-8942116685]
                                    </option>
                                    <option value="2100549">Avnish kumar[2100549-Male]-[2ND-A]-[Gopal kumar-9931742369]
                                    </option>
                                    <option value="2100553">umesh [2100553-Male]-[UKG-A]-[abhishek-9144555977]</option>
                                    <option value="2100561">umesh [2100561-Male]-[6TH-A]-[-]</option>
                                    <option value="2100563">umesh [2100563-Male]-[5TH-A]-[-]</option>
                                    <option value="2100571">Anshu[2100571-Female]-[UKG-A]-[Vijay-9144555977]</option>
                                    <option value="2100575"> BABALI SAHU[2100575-Female]-[UKG-A]-[SHAIKH-7978988989]
                                    </option>
                                    <option value="2100583">श्री[2100583-Female]-[2ND-A]-[दीपक-9926621333]</option>
                                    <option value="2100585">Muhammed Adnan[2100585-Male]-[4TH-A]-[Muhammed
                                        Afnan-686868606868]</option>
                                    <option value="2100589">hari[2100589-Male]-[2ND-A]-[hani-123456]</option>
                                    <option value="2100601">Nidhi Mishra[2100601-Male]-[UKG-A]-[Nidhi Mishra-7571940317]
                                    </option>
                                    <option value="2100609">SARIKA SULTANE[2100609-Female]-[11TH-A]-[SANJAY-7498177242]
                                    </option>
                                    <option value="2200612">dummy[2200612-Male]-[2ND-A]-[dummy father -1234567890]
                                    </option>
                                    <option value="2200614">balveer singh[2200614-Male]-[LKG-A]-[sukhvinder
                                        singh-9144555977]</option>
                                    <option value="2200615">mahira khan[2200615-Female]-[LKG-A]-[irfan khan-9144555977]
                                    </option>
                                    <option value="2200618">sanny[2200618-Male]-[LKG-A]-[soham-9144555977]</option>
                                    <option value="2200622">rohan sah[2200622-Male]-[2ND-A]-[ram -9816870719]</option>
                                    <option value="2200623">ishan kumar[2200623-Male]-[2ND-A]-[rohit kumar-9816870719]
                                    </option>
                                    <option value="2200624">pankaj patel[2200624-Male]-[6TH-A]-[ram -9816870719]
                                    </option>
                                    <option value="2200626">kirti panday[2200626-Female]-[LKG-A]-[sumit
                                        panday-9865474758]</option>
                                    <option value="2200627">lali[2200627-Male]-[LKG-A]-[-]</option>
                                    <option value="2200628">sushant singh[2200628-Male]-[UKG-A]-[nilkamal singh
                                        -9825734280]</option>
                                    <option value="2200629">saloni[2200629-Female]-[2ND-A]-[bijay-9825734280]</option>
                                    <option value="2200630">suman[2200630-Male]-[6TH-A]-[bijay-9825734280]</option>
                                    <option value="2200632">MANVEER SINGH [2200632-Female]-[7TH-A]-[GURDEV SINGH
                                        -836009915]</option>
                                    <option value="2200633">RAM PANDEY[2200633-Male]-[9TH-A]-[KAMLESH
                                        PANDEY-77718853445]</option>
                                    <option value="2200634">Mayur Mangesh Padvi[2200634-Male]-[2ND-A]-[Mangesh Gorakh
                                        Padvi-7773954846]</option>
                                    <option value="2200635">Bhavesh Arvind Padvi[2200635-Male]-[2ND-A]-[Arvind Gorakh
                                        Padvi-8766578634]</option>
                                    <option value="2200636">Nikhil Dinesh Padvi[2200636-Male]-[2ND-A]-[Dinesh Gorakh
                                        Padvi-7507167517]</option>
                                    <option value="2200637">Kiran Sharma[2200637-Female]-[7TH-A]-[Ramu Sharma-123456789]
                                    </option>
                                    <option value="2200638">Riya Sharma[2200638-Female]-[7TH-A]-[Ram Sharma-234567891]
                                    </option>
                                    <option value="2200640">Meena Verma[2200640-Female]-[7TH-A]-[Jay Verma-456789123]
                                    </option>
                                    <option value="2200641">Heena Mittal[2200641-Female]-[7TH-A]-[Lalu Pasad-567891234]
                                    </option>
                                    <option value="2200642">Anamika[2200642-Female]-[7TH-A]-[Yash Kapoor-9456312705]
                                    </option>
                                    <option value="2200643">Lalu Kumar[2200643-Male]-[7TH-A]-[Raju Kumar-678912345]
                                    </option>
                                    <option value="2200644">SK Thakur[2200644-Male]-[UKG-A]-[Aasss-8084407273]</option>
                                    <option value="2200645">abcs[2200645-Male]-[2ND-A]-[ebgh-25585]</option>
                                    <option value="2200646">Jay Sharma[2200646-Male]-[UKG-A]-[Harsh Sharma-1234567891]
                                    </option>
                                    <option value="2200647">Sikdar[2200647-Male]-[UKG-A]-[-666]</option>
                                    <option value="2200648">Bijoy[2200648-Male]-[UKG-A]-[ajoy-4555]</option>
                                    <option value="2200650">sona[2200650-Female]-[2ND-A]-[rajesh-9816870719]</option>
                                    <option value="2200651">RIYA DAS[2200651-Male]-[UKG-A]-[RATAN DAS-]</option>
                                    <option value="2200652">SUMIT KUMAR[2200652-Male]-[UKG-A]-[Anil kumar -1234567890]
                                    </option>
                                    <option value="2200653">Somya[2200653-Male]-[UKG-A]-[-6756789876]</option>
                                    <option value="2200654">MAHEK DASHORE[2200654-Female]-[11TH-A]-[NAVIN KUMAR
                                        DASHORE-9584669888]</option>
                                    <option value="2200656">Radha Kumari[2200656-Male]-[UKG-A]-[Ram Kumar-1234567894]
                                    </option>
                                    <option value="2200657">ARPAN NANDEWAR[2200657-Male]-[UKG-A]-[RAM
                                        NANDEWAR-7987736568]</option>
                                    <option value="2200659">mahir khan [2200659-Male]-[4TH-A]-[javed khan -8305694069]
                                    </option>
                                    <option value="2200661">imran khan [2200661-Male]-[4TH-A]-[waseem khan -9977805298]
                                    </option>
                                    <option value="2200662">sajid khan [2200662-Male]-[2ND-A]-[javed khan-9826038592]
                                    </option>
                                    <option value="2200663">dummy [2200663-Male]-[2ND-A]-[dummy father-1234567890]
                                    </option>
                                    <option value="2200665">dishika[2200665-Female]-[6TH-A]-[sonu khatri -1234567892]
                                    </option>
                                    <option value="2200666">Bhavesh Arvind Padvi[2200666-Male]-[UKG-A]-[-]</option>
                                    <option value="2200667">payal[2200667-Male]-[7TH-A]-[shyamlal-8052987121]</option>
                                    <option value="2200668">SAJAL[2200668-Male]-[4TH-A]-[-9818273851]</option>
                                    <option value="2200669">sarita[2200669-Female]-[6TH-A]-[ramjee Gupta-8840268435]
                                    </option>
                                    <option value="2200671">Komal Gupta[2200671-Female]-[2ND-A]-[Pramod
                                        Gupta-8192906306]</option>
                                    <option value="2200672">Anil Kumar[2200672-Male]-[4TH-A]-[-9990008522]</option>
                                    <option value="2200674">Anil Kapoor Dhoom[2200674-Male]-[2ND-A]-[-9998000522]
                                    </option>
                                    <option value="2200675">Prashant [2200675-Male]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200677">RAJ[2200677-Male]-[2ND-A]-[rajesh-4987549]</option>
                                    <option value="2200678">himanshi[2200678-Female]-[UKG-A]-[babl-1444411]</option>
                                    <option value="2200679">Ram[2200679-Male]-[5TH-A]-[Lala seth-9893230765]</option>
                                    <option value="2200680">Prashant Kumar[2200680-Male]-[5TH-A]-[Rammu-8109607707]
                                    </option>
                                    <option value="2200681">GGDFGFDGFDG[2200681-Male]-[UKG-A]-[-]</option>
                                    <option value="2200684">ABHISHEK [2200684-Male]-[UKG-A]-[B L YADAV-9695924506]
                                    </option>
                                    <option value="2200685">XYZ[2200685-Male]-[2ND-A]-[XYZ-9818273851]</option>
                                    <option value="2200686">abc[2200686-Male]-[2ND-A]-[-7845123698]</option>
                                    <option value="2200687">rahul[2200687-Male]-[2ND-A]-[-]</option>
                                    <option value="2200688">Prashant rajak[2200688-Male]-[2ND-A]-[Rammu
                                        lal-647322824425]</option>
                                    <option value="2200689"> Kanika[2200689-Male]-[UKG-A]-[-0123456789]</option>
                                    <option value="2200691">Ravi[2200691-Male]-[UKG-A]-[xyz-]</option>
                                    <option value="2200692">Prashant kumar[2200692-Male]-[2ND-A]-[Rammu lal-]</option>
                                    <option value="2200693">RAHUL[2200693-Male]-[UKG-A]-[XYC-]</option>
                                    <option value="2200695">praveen kumar[2200695-Male]-[1ST-A]-[-66666666666]</option>
                                    <option value="2200698">bjkb[2200698-Male]-[2ND-A]-[kllkdv-9038423904]</option>
                                    <option value="2200699">laxmi[2200699-Male]-[2ND-A]-[venkat-1234567892]</option>
                                    <option value="2200702">AJAY[2200702-Male]-[2ND-A]-[SUNIL-7067633301]</option>
                                    <option value="2200707">kunal jha[2200707-Male]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200708">fgdfg[2200708-Male]-[UKG-A]-[dfgdf-955656]</option>
                                    <option value="2200709">DISHANT PATIDAR[2200709-Male]-[6TH-A]-[-9999555333]</option>
                                    <option value="2200710">vishal jha[2200710-Male]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200713">Ram[2200713-Male]-[4TH-A]-[-9999999995656]</option>
                                    <option value="2200714">vishal jha[2200714-Male]-[UKG-A]-[-9918556649]</option>
                                    <option value="2200715">Prashant kumar[2200715-Male]-[1ST-A]-[babl-7844411100]
                                    </option>
                                    <option value="2200716">AS[2200716-Male]-[3RD-A]-[SS-4545454]</option>
                                    <option value="2200717">muskan ray[2200717-Female]-[UKG-A]-[roshan ray-9813405312]
                                    </option>
                                    <option value="2200719">Prashant KUMAR[2200719-Male]-[5TH-A]-[Rammu lal-7744447774]
                                    </option>
                                    <option value="2200720">xghkjh[2200720-Male]-[LKG-A]-[Anil-1234567891]</option>
                                    <option value="2200722">सौरभ[2200722-Male]-[2ND-A]-[sunil jain-9234567981]</option>
                                    <option value="2200723">aashu [2200723-Male]-[3RD-A]-[-1234567891]</option>
                                    <option value="2200724">SANJAY KUMAR[2200724-Male]-[UKG-A]-[manoj pandey-470050060]
                                    </option>
                                    <option value="2200725">Rahul kumar[2200725-Male]-[5TH-A]-[vijay singh-8700377769]
                                    </option>
                                    <option value="2200728">saloni karn[2200728-Female]-[2ND-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200729">sushant karn[2200729-Male]-[UKG-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200730">sanam karn[2200730-Female]-[LKG-A]-[bijay karn-9816870719]
                                    </option>
                                    <option value="2200731">simran[2200731-Male]-[5TH-A]-[PRAKASH PATIDAR-9977522556]
                                    </option>
                                    <option value="2200732">APEKSHIT KOLI[2200732-Male]-[2ND-A]-[MANOJ KUMAR
                                        KOLI-7697233299]</option>
                                    <option value="2200733">Akshay Karande[2200733-Male]-[LKG-A]-[NILESH PATIDAR-]
                                    </option>
                                    <option value="2200734">Rituraj[2200734-Male]-[2ND-A]-[mitu raj-9875455522]</option>
                                    <option value="2200735">Aaditya [2200735-Male]-[2ND-A]-[Sujit-9934507865]</option>
                                    <option value="2200737">ashok[2200737-Male]-[9TH-A]-[-]</option>
                                    <option value="2200738">mayank[2200738-Male]-[LKG-A]-[demo--1]</option>
                                    <option value="2200740">ashok[2200740-Male]-[2ND-A]-[-]</option>
                                    <option value="2200741">Abhay[2200741-Male]-[UKG-A]-[-]</option>
                                    <option value="2200742">vivek[2200742-Male]-[2ND-A]-[-]</option>
                                    <option value="2200743">abhisek[2200743-Male]-[1ST-A]-[-8109195202]</option>
                                    <option value="2200744">bbs[2200744-Male]-[2ND-A]-[bbs-9638527410]</option>
                                    <option value="2200745">roma[2200745-Male]-[9TH-A]-[-8109195202]</option>
                                    <option value="2200746">ravi[2200746-Male]-[2ND-A]-[udham-56548455455]</option>
                                    <option value="2200747">Vaishnavi Thakur[2200747-Female]-[LKG-A]-[Mr. Amrendra
                                        Pratap Singh -9918666600]</option>
                                    <option value="2200748">AADITYA JHILLE[2200748-Male]-[2ND-A]-[AASHISH
                                        JHILLE-7024347776]</option>
                                    <option value="2200749">Shifa Meman[2200749-Female]-[8TH-A]-[Shabbir
                                        Meman-9893840078]</option>
                                    <option value="2200750">ROHIT KUMAR[2200750-Male]-[2ND-A]-[DOODH NATH
                                        YADAV-8577908478]</option>
                                    <option value="2200751">Prashant KUMAR[2200751-Male]-[2ND-A]-[Rammu lal-7748908646]
                                    </option>
                                    <option value="2200752">Urvi sen[2200752-Female]-[LKG-A]-[Prabhash sen-9101065310]
                                    </option>
                                    <option value="2200753">Akshaj Mishra[2200753-Male]-[3RD-A]-[shesh Narayan
                                        Mishra-9685437207]</option>
                                    <option value="2200755">priya[2200755-Male]-[4TH-A]-[rahul mehara-65463312]</option>
                                    <option value="2200756">RAJESH KUMAR MAHTO [2200756-Female]-[6TH-A]-[SITA RAM MAHTO
                                        -7488150952]</option>
                                    <option value="2200757">Ram[2200757-Male]-[12TH-A]-[Bca-9416499566]</option>
                                    <option value="2200758">Aashish[2200758-Male]-[NURSERY-A]-[Ramesh-9416499566]
                                    </option>
                                    <option value="2200759">INAMUR RAHMAN[2200759-Male]-[LKG-A]-[ATIKUR
                                        RAHMAN-8486304694]</option>
                                    <option value="2200760">nidhi jain [2200760-Male]-[3RD-A]-[sunil jain-9988525245]
                                    </option>
                                    <option value="2200761">rakesh[2200761-Male]-[LKG-A]-[-]</option>
                                    <option value="2200762">Ravi[2200762-Male]-[12TH-A]-[-8059076999]</option>
                                    <option value="2200763">VINAYAK PATIDAR[2200763-Male]-[5TH-A]-[rahul
                                        mehara-456946564]</option>
                                    <option value="2200765">RAJ NAYK [2200765-Male]-[6TH-A]-[GOPAL KHATRI-96325663]
                                    </option>
                                    <option value="2200767">Praashant [2200767-Male]-[5TH-A]-[rammulal-70000040]
                                    </option>
                                    <option value="2200770">raman[2200770-Male]-[NURSERY-A]-[tapan-7896541256]</option>
                                    <option value="2200771">Akshay[2200771-Male]-[8TH-A]-[ABC-1234567890]</option>
                                    <option value="2200772">Prashant r[2200772-Male]-[5TH-A]-[rahul mehara -]</option>
                                    <option value="2200776">nidhi jain [2200776-Male]-[4TH-A]-[sunil jain-9988554665]
                                    </option>
                                    <option value="2200779">sunil 1[2200779-Male]-[2ND-A]-[Asad-9955886644]</option>
                                    <option value="2200780">Nikhil[2200780-Male]-[UKG-A]-[jonh-9090909090]</option>
                                    <option value="2200782">yashi[2200782-Male]-[NURSERY-A]-[pushpendra-8430555580]
                                    </option>
                                    <option value="2200783">Gopi[2200783-Male]-[8TH-A]-[BIKSHAM -9052483352]</option>
                                    <option value="2200785">ABHIMANYU SHARMA[2200785-Male]-[NURSERY-A]-[GOURAV
                                        SHARMA-9755404505]</option>
                                    <option value="2200786">AVNI SHARMA[2200786-Female]-[2ND-A]-[SOURABH
                                        SHARMA-9826625627]</option>
                                    <option value="2200788">Fig[2200788-Female]-[7TH-A]-[Niraj Kumar -458725]</option>
                                    <option value="2200790">shree[2200790-Male]-[NURSERY-A]-[samay singh -9911587536]
                                    </option>
                                    <option value="2200791">shreyansh[2200791-Male]-[1ST-A]-[Neeraj kumar-9911587539]
                                    </option>
                                    <option value="2200793">Ajay[2200793-Male]-[NURSERY-A]-[Vijay-685555555555]</option>
                                    <option value="2200795">Druwa Ganesh Chaudhari[2200795-Male]-[NURSERY-A]-[Ganesh
                                        Chaudhari-8469808008]</option>
                                    <option value="2200796">SONU PRAJAPATI[2200796-Male]-[2ND-A]-[LALARAM
                                        PRAJAPATI-7067208375]</option>
                                    <option value="2200797">Md alam ali [2200797-Male]-[UKG-A]-[Ali alam-9473000888]
                                    </option>
                                    <option value="2200798">dummy [2200798-Male]-[2ND-A]-[dummy-1234567890]</option>
                                    <option value="2200799">TABREZ ALAM[2200799-Male]-[2ND-A]-[BAKRIDAN
                                        ANSARI-7677425494]</option>
                                    <option value="2200800">SHIVANSH RAWAT[2200800-Male]-[NURSERY-A]-[AJAY-6283926887]
                                    </option>
                                    <option value="2200805">mahi[2200805-Male]-[8TH-A]-[rohit kumar -]</option>
                                    <option value="2200806">mahi[2200806-Male]-[UKG-A]-[ram singh -7024510634]</option>
                                    <option value="2200810">shahnawaz[2200810-Male]-[1ST-A]-[-7677425494]</option>
                                    <option value="2200811">yasin[2200811-Male]-[1ST-A]-[-9931326638]</option>
                                    <option value="2200812">sultana[2200812-Male]-[1ST-A]-[-9693212542]</option>
                                    <option value="2200814">pragya [2200814-Female]-[6TH-A]-[rajesh-1234567891]</option>
                                    <option value="2200817">priya[2200817-Male]-[8TH-A]-[kaml raj-56454564564564]
                                    </option>
                                    <option value="2200822">mahi[2200822-Male]-[8TH-A]-[kaml raj-5644545456]</option>
                                    <option value="2200823">Yash [2200823-Male]-[NURSERY-A]-[Soun-6265767366]</option>
                                    <option value="2200827">jeet kumar[2200827-Male]-[6TH-A]-[amit kumar -7896454571]
                                    </option>
                                    <option value="2200831">PANKAJ KUMAR[2200831-Male]-[2ND-A]-[UPENDRA
                                        SHARMA-7004625934]</option>
                                    <option value="2200836">Rohit[2200836-Male]-[9TH-A]-[Ram kumar-9918066214]</option>
                                    <option value="2200841">vicky uikey[2200841-Male]-[1ST-A]-[jitendrasingh
                                        uikey-7354713649]</option>
                                    <option value="2200846">penolope [2200846-Male]-[8TH-A]-[jonh-]</option>
                                    <option value="2200854">Abdul sami [2200854-Male]-[12TH-A]-[Mohd Sharif -6005939589]
                                    </option>
                                    <option value="2200856">jjlklkk[2200856-Male]-[8TH-A]-[-]</option>
                                    <option value="2200861">VINAYAK PATIDAR[2200861-Male]-[2ND-A]-[SUNIL RAI-9955882211]
                                    </option>
                                    <option value="2200864">NIDHI SINGH[2200864-Male]-[5TH-A]-[RAMRAJ-89789665677]
                                    </option>
                                    <option value="2200868">Prashant [2200868-Male]-[7TH-A]-[Rammu lal-1234569875]
                                    </option>
                                    <option value="2200869">Prashant [2200869-Male]-[7TH-A]-[Rammu lal-1234587932]
                                    </option>
                                    <option value="2200871">pooja bairagi[2200871-Male]-[8TH-A]-[j. d. bairagi-]
                                    </option>
                                    <option value="2200872">pooja bairagi[2200872-Male]-[8TH-A]-[j. d. bairagi-]
                                    </option>
                                    <option value="2200879">pooja bairagi[2200879-Male]-[8TH-A]-[Mr. J.D. Bairagi-]
                                    </option>
                                    <option value="2200883">Farhan khan[2200883-Male]-[8TH-A]-[Riyaz khan-458963248327]
                                    </option>
                                    <option value="2200884">पंकज कुमार[2200884-Male]-[NURSERY-A]-[लालू राम-9898888888]
                                    </option>
                                    <option value="2200886">Mafidul Islam[2200886-Male]-[6TH-A]-[Ali-00000000000000]
                                    </option>
                                    <option value="2200901">neha parihar [2200901-Female]-[UKG-A]-[himanshu parihar
                                        -7854126359]</option>
                                    <option value="2200910">Prashant[2200910-Male]-[8TH-A]-[Rammu lal-7740000]</option>
                                    <option value="2200915">mahi[2200915-Male]-[8TH-A]-[kaml raj-4744444]</option>
                                    <option value="2200918">mansha[2200918-Male]-[UKG-A]-[-]</option>
                                    <option value="2200919">riya[2200919-Male]-[8TH-A]-[kaml raj-56454564]</option>
                                    <option value="2200927">VINAYAK PATIDAR[2200927-Male]-[2ND-A]-[RAJENDRA
                                        PATIDAR-9988552233]</option>
                                    <option value="2200931">ArhN[2200931-Male]-[5TH-A]-[Arqam-982365526]</option>
                                    <option value="2200933">Ariz[2200933-Male]-[UKG-A]-[-]</option>
                                    <option value="2200934">Ariz[2200934-Male]-[UKG-A]-[-]</option>
                                    <option value="2200936">vicky uikey[2200936-Male]-[2ND-A]-[jitendra singh
                                        uikey-7354713649]</option>
                                    <option value="2200937">Chirag jatav[2200937-Male]-[1ST-A]-[MR.Arjun jatav-123]
                                    </option>
                                    <option value="2200938">Pooja bairagi [2200938-Female]-[8TH-A]-[Smt. Meenu
                                        bairagi-963486652388]</option>
                                    <option value="2200939">rajkumar[2200939-Male]-[8TH-A]-[Rammu lal-544564]</option>
                                    <option value="2200942">priya[2200942-Male]-[8TH-A]-[-]</option>
                                    <option value="2200943">Md. Mokarram alam [2200943-Male]-[UKG-A]-[Md. Siddique alam
                                        -6200665811]</option>
                                    <option value="2200945">ashta [2200945-Female]-[8TH-A]-[sanjeev -7894561230]
                                    </option>
                                    <option value="2200946">lalit [2200946-Male]-[7TH-A]-[harichandra -1234567890]
                                    </option>
                                    <option value="2200947">shikha [2200947-Female]-[8TH-A]-[rajendra -546123790]
                                    </option>
                                    <option value="2200948">SANDEEP[2200948-Male]-[LKG-A]-[PRATHAM SINGH-9991233258]
                                    </option>
                                    <option value="2200951">Vansh Kumar Pasi[2200951-Male]-[2ND-A]-[Ravi
                                        Pasi-8103488491]</option>
                                    <option value="2200953">rakesh[2200953-Male]-[LKG-A]-[shaelendra-9058068745]
                                    </option>
                                    <option value="2200955">RAM KUMAR [2200955-Male]-[2ND-A]-[SHYAM KUMAR -8936860311]
                                    </option>
                                    <option value="2200957">Prashant [2200957-Male]-[8TH-A]-[rammu lal -7748770000]
                                    </option>
                                    <option value="2200958">Prashant [2200958-Male]-[8TH-A]-[rammu lal -74444]</option>
                                    <option value="2200959">Amit rao[2200959-Male]-[2ND-A]-[Sahab rao-9450673349]
                                    </option>
                                    <option value="2200961">NIDHI SINGH[2200961-Female]-[2ND-A]-[BHARAT
                                        PATIDAR-824685465]</option>
                                    <option value="2200962">shravan singh[2200962-Male]-[2ND-A]-[rajaram
                                        singh-9452358861]</option>
                                    <option value="2200965">asharamk[2200965-Male]-[2ND-A]-[-6265861579]</option>
                                    <option value="2200974">kamalkant[2200974-Male]-[8TH-A]-[vasudev dhakad-9752199047]
                                    </option>
                                    <option value="2200976">Prashant [2200976-Male]-[8TH-A]-[rammu lal -744777]</option>
                                    <option value="2200977">Aarunya Raj Sinha[2200977-Male]-[UKG-A]-[tret-87874545454]
                                    </option>
                                    <option value="2200980">Monali[2200980-Female]-[2ND-A]-[-]</option>
                                    <option value="2200984">lokesh[2200984-Male]-[8TH-A]-[sandeep-9416499566]</option>
                                    <option value="2200987">prash[2200987-Male]-[7TH-A]-[rrmm-7444]</option>
                                    <option value="2200989">Prashant [2200989-Male]-[8TH-A]-[rammu lal -74440]</option>
                                    <option value="2200990">Prashant [2200990-Male]-[8TH-A]-[rammu lal -744]</option>
                                    <option value="2200992">Prashant [2200992-Male]-[8TH-A]-[-77]</option>
                                    <option value="2200993">VEDANT TIWARI[2200993-Male]-[8TH-A]-[MANOJ KUMAR
                                        TIWARI-8090688671]</option>
                                    <option value="2201009">Aamna Hussain[2201009-Female]-[NURSERY-A]-[Syed Farhat
                                        Hussain-9018501010]</option>
                                    <option value="2201010">Prashant [2201010-Male]-[7TH-A]-[rammu lal -74444]</option>
                                    <option value="2201015">Prashant [2201015-Male]-[7TH-A]-[rammu lal -7441000]
                                    </option>
                                    <option value="2201032">RAJESH CHOVE[2201032-Male]-[9TH-A]-[MUKESH CHOVE-]</option>
                                    <option value="2201035">Nitya Yadav[2201035-Female]-[NURSERY-A]-[Mr. Mayank
                                        Yadav-8707260755]</option>
                                    <option value="2201036">Shubh Kashyap[2201036-Male]-[NURSERY-A]-[Mr. Anikesh
                                        Kumar-8957380880]</option>
                                    <option value="2201037">Arohi Kushwaha[2201037-Female]-[NURSERY-A]-[Mr. Shailendra
                                        Singh Kushwaha-8726794375]</option>
                                    <option value="2201038">Anikesh[2201038-Male]-[NURSERY-A]-[Mr. Amit
                                        Kumar-9621111842]</option>
                                    <option value="2201039">Prithviraj[2201039-Male]-[NURSERY-A]-[Dr. Pramod
                                        Kumar-9219270152]</option>
                                    <option value="2201040">Arushi Diwakar[2201040-Male]-[NURSERY-A]-[Mr. Virendra
                                        Kumar-6393465780]</option>
                                    <option value="2201041">Kartik Nishad[2201041-Male]-[NURSERY-A]-[Kartik Nishad-]
                                    </option>
                                    <option value="2201062">Ramesh[2201062-Male]-[4TH-A]-[Suresh-9821223300]</option>
                                    <option value="2201068">AUGUSTAY[2201068-Male]-[10TH-A]-[ SHARMA-9897015271]
                                    </option>
                                    <option value="2201069">Anamika Agrawal[2201069-Female]-[7TH-A]-[Sushil
                                        Agrawal-9111111111]</option>
                                    <option value="2201076">Sujata Agrawal[2201076-Female]-[1ST-A]-[Sushil
                                        Agrawal-7111111111]</option>
                                    <option value="2201077">aman soni[2201077-Male]-[11TH-A]-[ravi soni-6387770743]
                                    </option>
                                    <option value="2201078">aman soni 2[2201078-Male]-[9TH-A]-[ravi soni-6387770743]
                                    </option>
                                    <option value="2201079">amit[2201079-Male]-[11TH-A]-[ram chandr-8976453600]</option>
                                    <option value="2201080">Roshan [2201080-Male]-[6TH-A]-[Raj Mishra-9936528547]
                                    </option>
                                    <option value="2201081">NIDHI SINGH [2201081-Female]-[7TH-A]-[Asad-8454154454]
                                    </option>
                                    <option value="2201082">Rajdeep kumar[2201082-Male]-[4TH-A]-[Mandal
                                        himesh-8709788098]</option>
                                    <option value="2201084">SURYA PRATAP MAURYA[2201084-Male]-[5TH-A]-[-]</option>
                                    <option value="2201085">Danica Mariam Jacob[2201085-Female]-[1ST-A]-[J P
                                        Jacob-9977228818]</option>
                                    <option value="2201086">Rahul Kumar[2201086-Male]-[NURSERY-A]-[Lalbabu
                                        Ray-9570503057]</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>School/Institute Participate</label>
                            <input type="text" name="school_name" placeholder="School Institute"
                                value="SIMPTION TECH PVT LTD" class="form-control" readonly />
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none;">
                        <div class="form-group">
                            <input type="text" name="session_value" id="session_value" value="" class="form-control"
                                readonly />
                        </div>
                    </div>

                    <div class="col-md-3" style="display:none;">
                        <div class="form-group">
                            <label>Student Roll No</label>
                            <input type="text" name="student_roll_no" id="student_roll" placeholder="Student Roll"
                                value="" class="form-control" />
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" name="student_name" placeholder="Student Name" id="student_name"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Father Name</label>
                            <input type="text" name="student_father_name" id="student_father_name"
                                placeholder="Father Name" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Mother Name</label>
                            <input type="text" name="student_mother_name" id="student_mother_name"
                                placeholder="Mother Name" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Aadhar/Uid No</label>
                            <input type="text" name="student_adhar_number" id="student_adhar_number"
                                class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Addmission No.</label>
                            <input type="text" name="student_admission_number" id="student_admission_number" value=""
                                class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Scholar No.</label>
                            <input type="text" name="student_scholar_number" id="student_scholar_number" value=""
                                class="form-control" readonly />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contact_no" id="contact_no" placeholder="Contact No" value=""
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Board Registration Number</label>
                            <input type="text" name="board_no" required placeholder="Board Registration Number" id=""
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Class</font></label>
                            <input type="text" name="student_class" placeholder="Student Class" id="student_class"
                                class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Section</font></label>
                            <input type="text" name="student_section" placeholder="Student Class" id="student_section"
                                class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="text" id="gender" name="gender" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input type="date" name="dateofbirth" id="dateofbirth" value="" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Age Category</label>
                            <input type="text" name="age_category" id="age_year" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Actual Age</label>
                            <input type="text" name="actual_age" id="actualdate" value="" class="form-control" readonly>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Student Photo</label>
                            <input type="file" name="student_photo" id="student_photo" placeholder=""
                                onchange="check_file_type(this,'student_photo','show_student_photo','image');"
                                class="form-control" accept=".gif, .jpg, .jpeg, .png" value="">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Photo</label>
                            <img src="" id="show_student_photo" height="50" width="50"><input type="hidden"
                                name="student_photo_hidden" id="student_photo_hidden">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Dob Certificate</label>
                            <input type="file" name="document_dob" id="document_dob" placeholder=""
                                onchange="check_file_type(this,'document_dob','show_documents','image');"
                                class="form-control" accept=".gif, .jpg, .jpeg, .png" value="">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Document</label>
                            <img src="" id="show_documents" height="50" width="50"><input type="hidden"
                                name="dob_certificate_hidden" id="dob_certificate">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><input type="submit" name="finish" value="Submit" class="btn btn-primary" /></center>
                    </div>
                </form>
            </div>

            <!---------------------------------------------End Participate form--------------------------------------------------------->
            <!-- /.box-body -->
        </div>
    </div>
</section>
<script>
$(function() {
    $('.select2').select2();
});
</script>

@include('common.footer')