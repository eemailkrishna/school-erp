<script>
function valid(s_no){   
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
delete_employee(s_no);       
 }            
else  {      
return false;
 }       
  } 
  function delete_employee(s_no){
$.ajax({
type: "POST",
url: access_link+"staff/employee_delete.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Deleted','green');
				   get_content('staff/employee_list');
			   }else{
               alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}

function for_drop(s_no){
    var myval=confirm("Are you sure you want to Drop this Employee !!!!");
    if(myval==true){
    for_drop11(s_no);
    }else{
    return false;
    }
}

function for_drop11(s_no){
$.ajax({
type: "POST",
url: access_link+"staff/employee_drop.php?id="+s_no+"",
cache: false,
success: function(detail){
	  var res=detail.split("|?|");  
			   if(res[1]=='success'){
				   alert_new('Successfully Completed','green');
				   get_content('staff/employee_list');
			   }else{
               alert_new('Sorry!!! Some Error Occured','red'); 
			   }
}
});
}

function open_file1(image_type,emp_id){
	$.ajax({
	address: "POST",
	url: access_link+"staff/ajax_open_image.php?image_type="+image_type+"&emp_id="+emp_id+"",
	cache: false,
	success: function(detail){
	 $("#mypdf_view").html(detail);
	}
	});
	}

function fill_detail(){

var emp_id=document.getElementById('employee_id').value;
$.ajax({
type: "POST",
url: access_link+"staff/ajax_get_emp_detail.php?emp_id="+emp_id+"",
cache: false,
success: function(detail){
    
    console.log(detail)
    
  $("#emp_detail_list").html(detail);
}
});

}
	
</script>
  <section class="content-header">
      <h1>Employee Management        <small>Control Panel</small></h1>
      <ol class="breadcrumb">
	 <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li><a href="javascript:get_content('staff/staff')"><i class="fa fa-graduation-cap"></i> Employee</a></li>
	  <li class="active">Employee List</li>
      </ol>
    </section>
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <!-- /.box -->

          <div <div class="box box-success" >>
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
                
                <div class="col-md-4 col-md-offset-4">				
                <div class="col-md-12">				
					<div class="form-group" >
					  <label>Search Employees<font size="2" style="font-weight: normal;"></label>
					  <select name="" class="form-control select2" onchange="fill_detail();" id="employee_id" >
					  <option value="All">All</option>
					        select * from employee_info where emp_status='Active' ORDER BY s_no DESC							<option value="123341">suresh Devashi[123341]-[Driver]-[9820964914]</option>
														<option value="340">VIVEK KUMAR[340]-[]-[9525553060]</option>
														<option value="0338">TUSHAR[0338]-[Principle]-[0]</option>
														<option value="1337">ASHADUR RAHMAN MONDAL[1337]-[Principle]-[7005657009]</option>
														<option value="RP34641645336">PARVATI PATIL[RP34641645336]-[Teacher]-[7477010621]</option>
														<option value="-335">TUSHAR SULTANE[-335]-[Principle]-[]</option>
														<option value="334">ABJISHEK LAND[334]-[]-[]</option>
														<option value="333">JAGMAL YADAV[333]-[]-[]</option>
														<option value="332">JAGMAL YADAV[332]-[]-[]</option>
														<option value="hi331">eswari[hi331]-[]-[6369209603]</option>
														<option value="328">rahul [328]-[Teacher]-[56455698]</option>
														<option value="323">JAGMAL YADAV[323]-[Teacher]-[9898788845]</option>
														<option value="322">kundan kumar jha[322]-[]-[8789581784]</option>
														<option value="789456123216320">shamli [789456123216320]-[Teacher]-[6359874129]</option>
														<option value="315">Monika[315]-[]-[9821556548]</option>
														<option value="313">Moniika[313]-[]-[9825356122]</option>
														<option value="312">ufgv[312]-[]-[25646541]</option>
														<option value="310">pooja [310]-[Teacher]-[56475534]</option>
														<option value="309">nidhi[309]-[Teacher]-[7656754345]</option>
														<option value="303">rima d[303]-[]-[]</option>
														<option value="302">RAMKISHAN JI[302]-[]-[]</option>
														<option value="292">JAGMAL YADAV[292]-[]-[]</option>
														<option value="283">Priyanka kaushik[283]-[Teacher]-[9926534586]</option>
														<option value="281">Rati [281]-[]-[9638527410]</option>
														<option value="gtttsk280">Sunita Bai[gtttsk280]-[Teacher]-[9992288710]</option>
														<option value="261">PRAKASH KUMAWAT[261]-[]-[]</option>
														<option value="199">Mohit nagar[199]-[Teacher]-[7999245216]</option>
														<option value="001175">Hansraj[001175]-[Teacher]-[8053038939]</option>
														<option value="166">JAVID[166]-[Teacher]-[]</option>
														<option value="159">AA[159]-[]-[]</option>
														<option value="158">AAA[158]-[]-[]</option>
														<option value="157">xxx[157]-[]-[]</option>
														<option value="156">ANAYAT ULLAH[156]-[Principal]-[99064112069]</option>
														<option value="222155">RAYEES[222155]-[Computer INSTRUCTOR]-[9906412069]</option>
														<option value="154">suresh soni[154]-[]-[]</option>
														<option value="153">Shiwanand Tiwari[153]-[]-[8602503194]</option>
														<option value="152">umesh[152]-[]-[]</option>
														<option value="151">Rohit [151]-[]-[]</option>
														<option value="150">SURAJ KUMAR SINGH[150]-[]-[9576771430]</option>
														<option value="149">Tribhuwan Kumar[149]-[]-[9155703545]</option>
														<option value="148">Neelam jharbade[148]-[Other]-[8109668266]</option>
														<option value="1147">praveen[1147]-[Principle]-[8120900282]</option>
														<option value="146">satyaprakash yadav[146]-[Teacher]-[9638277283]</option>
														<option value="S145">Mr Daya Nand Tiwari[S145]-[Director]-[9336024608]</option>
														<option value="144">Supriya Santosh[144]-[]-[8602503194]</option>
														<option value="143">MD JAHIR KHAN[143]-[Teacher]-[+919086669999]</option>
														<option value="142">Supriya Santosh[142]-[]-[4454655y6547]</option>
														<option value="AAAA141">PALWINDER KAUR[AAAA141]-[Teacher]-[9417894252]</option>
														<option value="2901140">KAREEM RANA[2901140]-[Principle]-[8859090867]</option>
														<option value="29002139">VAISHNAVI AGRWAL[29002139]-[Teacher]-[7900927306]</option>
														<option value="138">Yashpal Kr[138]-[Accountant]-[741236985]</option>
														<option value="137">Supriya tiwari[137]-[]-[8319595088]</option>
														<option value="136">Teacher[136]-[]-[]</option>
														<option value="135">abhushek[135]-[]-[8630913086]</option>
														<option value="124489134">MONU KUMAR[124489134]-[Accountant]-[89559698998]</option>
														<option value="1132">ABHISHEK SINGH THAKUR[1132]-[Other]-[9300174646]</option>
														<option value="131"> teacher[131]-[]-[]</option>
														<option value="Ok show130">Pawan malviya[Ok show130]-[Teacher]-[7746943011]</option>
														<option value="129">user1[129]-[Teacher]-[]</option>
														<option value="128">VATAN VERMA[128]-[ENGINEER]-[8840241165]</option>
														<option value="127">demo faculty[127]-[]-[]</option>
														<option value="126">jitendra shriwash[126]-[]-[9691737446]</option>
														<option value="125">anand sharma[125]-[]-[1234567890]</option>
														<option value="124">Neelam jharbade[124]-[Other]-[]</option>
														<option value="122">umesh mourya[122]-[BDE]-[7067247461]</option>
														<option value="Samir 112">Samir harle[Samir 112]-[Librarian]-[7083029022 ]</option>
														<option value="111">Ravi[111]-[]-[00000000]</option>
														<option value="110">sadab[110]-[]-[8275483645]</option>
														<option value="123456109">nikhil advin[123456109]-[Teacher]-[1236547896]</option>
														<option value="108">KUMAR RAVIKANT[108]-[Incharge Principal]-[7979046795]</option>
														<option value="107">rani[107]-[]-[8275483645]</option>
														<option value="105">SANTOSH KUMAR SINGH[105]-[Teacher]-[9709042198]</option>
														<option value="104">atul singh thakur [104]-[]-[7089840046]</option>
														<option value="103">Anjali ojha[103]-[Teacher]-[887666]</option>
														<option value="102">MR. BHOOPENDRA LODHI [102]-[]-[9340342389]</option>
														<option value="101">MR. SANTOSH KUMAR SAHU[101]-[Teacher]-[8718909760]</option>
														<option value="99">kunal mourya[99]-[]-[8889648546]</option>
														<option value="97">Rajanikanta Mund[97]-[Other]-[8249570835]</option>
														<option value="96">TUSHAR IYRE [96]-[Teacher]-[9845632156]</option>
														<option value="95">AYUSH[95]-[Teacher]-[9406855366]</option>
														<option value="94">DS SALUJA[94]-[]-[9009742474]</option>
														<option value="93">tushar modi [93]-[Teacher]-[8109964727]</option>
														<option value="92">HARSHALI SHAH[92]-[Teacher]-[9406046007]</option>
														<option value="91">srishti gusain[91]-[]-[8602503194]</option>
														<option value="90">Brahmarao[90]-[]-[9949458795]</option>
														<option value="87">Sibdutta Negi[87]-[]-[9981229723]</option>
														<option value="86">Amit Kumar Patra[86]-[]-[8249570835]</option>
														<option value="85">Premshankar Yadav[85]-[Teacher]-[8249570835]</option>
														<option value="84">Human Ram Bhati[84]-[]-[8249570835]</option>
														<option value="83">Goutam Kumar Das[83]-[Principal]-[+916371329608]</option>
														<option value="82">Jyoti Ranjan Patra[82]-[Teacher]-[+917008251522]</option>
														<option value="81">Pankajini Patra[81]-[Teacher]-[8249570835]</option>
														<option value="80">Rashi Saxena[80]-[Teacher]-[9630843846]</option>
														<option value="79">sanjay[79]-[]-[8654963254]</option>
														<option value="78">pravin[78]-[]-[7578412587]</option>
														<option value="75">shreya sharma[75]-[Teacher]-[987461236]</option>
														<option value="74">DEMO[74]-[Teacher]-[9717386989]</option>
														<option value="71">rohan[71]-[Teacher]-[25625634]</option>
														<option value="70">suresh soni[70]-[Teacher]-[07878963254]</option>
														<option value="29">Abhul Rjaak [29]-[Teacher]-[9685745263]</option>
														<option value="20">jay kishan[20]-[]-[9864645645]</option>
														<option value="19">kailash soni[19]-[Teacher]-[9617777047]</option>
														<option value="15">kailash soni[15]-[Teacher]-[9617777047]</option>
												  </select>
					</div>
			</div>
			</div>
                
              <table id="example1" class="table table-bordered table-striped">
                <thead >
				<tr>
                  <th>S.NO.</th>
                  <th>Employee Name</th>
                  <!-- <th></th> -->
				  <th>Contact No.</th>
				  <th>D.O.B.</th>
                  <th>Designation</th>
                  
                  <th>Update By</th>
                  <th>Date</th>
                  
                  <th>Edit</th>
                  <th>Drop</th>
                  <th>Delete</th>
                  <th>Joining Letter</th>
                </tr>
                </thead>
                <tbody id="emp_detail_list">

                </tbody>
             </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
<div id="mypdf_view">
			<div>
      </div>
      <!-- /.row -->
    </section>
         <script>
  $(function () {
      var dataTable=$('#example1').DataTable({
                destroy: true,
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:access_link+"staff/emp_list_fatch.php",
                    type:"post"
                }
            });
   // $('#example1').DataTable()
  })
 
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>

  